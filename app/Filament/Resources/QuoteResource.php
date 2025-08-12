<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuoteResource\Pages;
use App\Filament\Resources\QuoteResource\RelationManagers;
use App\Models\Quote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;

class QuoteResource extends Resource
{
    protected static ?string $model = Quote::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Customer Management';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Customer Information')
                    ->schema([
                        Forms\Components\TextInput::make('customer_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('customer_email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        PhoneInput::make('phone')
                            ->defaultCountry('US')
                            ->onlyCountries(['us']),
                        Forms\Components\Textarea::make('customer_address')
                            ->required()
                            ->rows(3),
                    ])->columns(2),

                Forms\Components\Section::make('Service Details')
                    ->schema([
                        Forms\Components\Select::make('service_type')
                            ->required()
                            ->options([
                                'roof_repair' => 'Roof Repair',
                                'roof_replacement' => 'Roof Replacement',
                                'roof_installation' => 'New Roof Installation',
                                'roof_inspection' => 'Roof Inspection',
                                'gutter_services' => 'Gutter Services',
                                'emergency_repair' => 'Emergency Repair',
                            ]),
                        Forms\Components\Select::make('roof_type')
                            ->options([
                                'asphalt_shingles' => 'Asphalt Shingles',
                                'metal' => 'Metal Roofing',
                                'tile' => 'Tile Roofing',
                                'slate' => 'Slate Roofing',
                                'flat' => 'Flat Roofing',
                                'other' => 'Other',
                            ]),
                        Forms\Components\TextInput::make('estimated_area')
                            ->numeric()
                            ->suffix('sq ft'),
                        Forms\Components\DatePicker::make('preferred_start_date'),
                    ])->columns(2),

                Forms\Components\Section::make('Project Details')
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(4),
                        Forms\Components\Textarea::make('special_requirements')
                            ->rows(3),
                        Forms\Components\Placeholder::make('attachments')
                            ->label('Attachments')
                            ->content(function ($record) {
                                if (!$record || !$record->attachments) {
                                    return 'No attachments';
                                }

                                $attachments = is_array($record->attachments) ? $record->attachments : json_decode($record->attachments, true);
                                $html = '<div class="space-y-2">';

                                foreach ($attachments as $attachment) {
                                    $path = is_array($attachment) ? ($attachment['path'] ?? $attachment) : $attachment;
                                    $filename = basename($path);
                                    $url = \Storage::url($path);

                                    $html .= "<div class='flex items-center space-x-2'>";
                                    $html .= "<a href='{$url}' target='_blank' class='text-primary-600 hover:text-primary-500'>{$filename}</a>";
                                    $html .= "</div>";
                                }

                                $html .= '</div>';
                                return new \Illuminate\Support\HtmlString($html);
                            })
                            ->visible(fn ($record) => $record && $record->attachments),
                    ]),

                Forms\Components\Section::make('Quote Management')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->required()
                            ->options([
                                'pending' => 'Pending Review',
                                'reviewed' => 'Reviewed',
                                'quoted' => 'Quote Sent',
                                'accepted' => 'Accepted',
                                'rejected' => 'Rejected',
                            ])
                            ->default('pending'),
                        Forms\Components\Select::make('priority')
                            ->required()
                            ->options([
                                'low' => 'Low',
                                'medium' => 'Medium',
                                'high' => 'High',
                                'urgent' => 'Urgent',
                            ])
                            ->default('medium'),
                        Forms\Components\TextInput::make('estimated_cost')
                            ->numeric()
                            ->prefix('$'),
                        Forms\Components\Textarea::make('admin_notes')
                            ->rows(3),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('quote_number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_type')
                    ->badge(),
//                Tables\Columns\TextColumn::make('status')
//                    ->badge()
//                    ->color(fn (string $state): string => match ($state) {
//                        'pending' => 'warning',
//                        'reviewed' => 'info',
//                        'quoted' => 'primary',
//                        'accepted' => 'success',
//                        'rejected' => 'danger',
//                    }),

                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'reviewed' => 'Reviewed',
                        'quoted' => 'Quoted',
                        'accepted' => 'Accepted',
                        'rejected' => 'Rejected',
                    ])
                    ->updateStateUsing(fn($record, $state) => $record->update(['status' => $state])),

                Tables\Columns\TextColumn::make('priority')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'low' => 'gray',
                        'medium' => 'info',
                        'high' => 'warning',
                        'urgent' => 'danger',
                    }),
                Tables\Columns\ViewColumn::make('attachments')
                    ->label('Attachments')
                    ->view('filament.tables.columns.multiple-attachments'),
                Tables\Columns\TextColumn::make('estimated_cost')
                    ->money('USD')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status'),
                Tables\Filters\SelectFilter::make('service_type'),
                Tables\Filters\SelectFilter::make('priority'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                //Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuotes::route('/'),
            'create' => Pages\CreateQuote::route('/create'),
            'view' => Pages\ViewQuote::route('/{record}'),
            'edit' => Pages\EditQuote::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
