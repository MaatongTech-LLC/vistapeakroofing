<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Service Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(),

                                Textarea::make('short_description')
                                    ->rows(2)
                                    ->columnSpanFull()
                                    ->helperText('Brief description for service cards'),

                                Textarea::make('description')
                                    ->required()
                                    ->rows(4)
                                    ->columnSpanFull()
                                    ->helperText('Detailed service description'),
                            ]),
                    ]),

                Section::make('Service Details')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                Select::make('category')
                                    ->options([
                                        'residential' => 'Residential',
                                        'commercial' => 'Commercial',
                                        'industrial' => 'Industrial',
                                        'emergency' => 'Emergency',
                                        'maintenance' => 'Maintenance',
                                        'repair' => 'Repair',
                                        'installation' => 'Installation',
                                    ])
                                    ->searchable(),

                                TextInput::make('estimated_duration')
                                    ->numeric()
                                    ->suffix('days')
                                    ->helperText('Typical project duration'),

                            ]),
                    ]),

                Section::make('Pricing')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('starting_price')
                                    ->numeric()
                                    ->prefix('$')
                                    ->step(0.01)
                                    ->helperText('Starting price for this service'),

                                Select::make('price_unit')
                                    ->options([
                                        'per sq ft' => 'Per Square Foot',
                                        'per project' => 'Per Project',
                                        'per hour' => 'Per Hour',
                                        'per day' => 'Per Day',
                                        'linear ft' => 'Per Linear Foot',
                                    ])
                                    ->helperText('Unit for pricing'),
                            ]),
                    ]),

                Section::make('Features & Benefits')
                    ->schema([
                        TagsInput::make('features')
                            ->helperText('Key features or benefits of this service')
                            ->placeholder('Add feature...')
                            ->columnSpanFull(),
                    ]),

                Section::make('Media & Branding')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                FileUpload::make('images')
                                    ->image()
                                    ->multiple()
                                    ->reorderable()
                                    ->maxFiles(8)
                                    ->imageEditor()
                                    ->imagePreviewHeight('250')
                                    ->panelAspectRatio('2:1')
                                    ->helperText('Upload service images (max 8 files)')
                                    ->columnSpanFull(),

                            ]),
                    ]),

                Section::make('Settings')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Toggle::make('is_active')
                                    ->default(true)
                                    ->helperText('Make this service visible on website'),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('medium'),

                BadgeColumn::make('category')
                    ->colors([
                        'primary' => 'residential',
                        'success' => 'commercial',
                        'warning' => 'industrial',
                        'danger' => 'emergency',
                        'secondary' => 'maintenance',
                        'info' => 'repair',
                        'gray' => 'installation',
                    ])
                    ->searchable(),

                TextColumn::make('starting_price')
                    ->money('usd')
                    ->sortable()
                    ->getStateUsing(function ($record) {
                        if ($record->starting_price) {
                            return $record->starting_price . ($record->price_unit ? ' ' . $record->price_unit : '');
                        }
                        return null;
                    }),

                TextColumn::make('estimated_duration')
                    ->suffix(' days')
                    ->sortable()
                    ->toggleable(),



                ToggleColumn::make('is_active')
                    ->label('Active'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'residential' => 'Residential',
                        'commercial' => 'Commercial',
                        'industrial' => 'Industrial',
                        'emergency' => 'Emergency',
                        'maintenance' => 'Maintenance',
                        'repair' => 'Repair',
                        'installation' => 'Installation',
                    ]),


                Filter::make('is_active')
                    ->query(fn (Builder $query): Builder => $query->where('is_active', true))
                    ->label('Active Services'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('sort_order', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'view' => Pages\ViewService::route('/{record}'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
