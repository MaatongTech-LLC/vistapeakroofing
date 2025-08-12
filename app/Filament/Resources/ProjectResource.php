<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = 'Content Management';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Project Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(),

                                Textarea::make('short_description')
                                    ->rows(2)
                                    ->columnSpanFull()
                                    ->helperText('Brief description for project cards/previews'),

                                Textarea::make('description')
                                    ->required()
                                    ->rows(4)
                                    ->columnSpanFull()
                                    ->helperText('Detailed project description'),
                            ]),
                    ]),

                Section::make('Project Details')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('location')
                                    ->maxLength(255),

                                DatePicker::make('completion_date'),

                                TextInput::make('duration_days')
                                    ->numeric()
                                    ->suffix('days'),
                            ]),

                        Grid::make(3)
                            ->schema([
                                TextInput::make('project_cost')
                                    ->numeric()
                                    ->prefix('$')
                                    ->step(0.01),

                                TextInput::make('client_name')
                                    ->maxLength(255),

                                Select::make('status')
                                    ->options([
                                        'planning' => 'Planning',
                                        'in_progress' => 'In Progress',
                                        'completed' => 'Completed',
                                        'on_hold' => 'On Hold',
                                    ])
                                    ->required(),
                            ]),
                    ]),

                Section::make('Materials Used')
                    ->schema([
                        Repeater::make('materials_used')
                            ->schema([
                                TextInput::make('material')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('quantity')
                                    ->maxLength(100),
                                TextInput::make('supplier')
                                    ->maxLength(255),
                            ])
                            ->columns(3)
                            ->addActionLabel('Add Material')
                            ->collapsible(),
                    ]),

                Section::make('Media')
                    ->schema([
                        FileUpload::make('images')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->maxFiles(10)
                            ->imageEditor()
                            ->imagePreviewHeight('250')
                            ->loadingIndicatorPosition('left')
                            ->panelAspectRatio('2:1')
                            ->panelLayout('integrated')
                            ->removeUploadedFileButtonPosition('right')
                            ->uploadButtonPosition('left')
                            ->uploadProgressIndicatorPosition('left')
                            ->helperText('Upload project images (max 10 files)')
                            ->columnSpanFull(),
                    ]),

                Section::make('Settings')
                    ->schema([
                        Grid::make(2)
                            ->schema([

                                Toggle::make('is_published')
                                    ->default(true)
                                    ->helperText('Make this project visible on the website'),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('medium'),

                TextColumn::make('location')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'planning',
                        'primary' => 'in_progress',
                        'success' => 'completed',
                        'danger' => 'on_hold',
                    ]),

                TextColumn::make('project_cost')
                    ->money('usd')
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('completion_date')
                    ->date()
                    ->sortable()
                    ->toggleable(),


                ToggleColumn::make('is_published')
                    ->label('Published'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'planning' => 'Planning',
                        'in_progress' => 'In Progress',
                        'completed' => 'Completed',
                        'on_hold' => 'On Hold',
                    ]),

                Filter::make('is_featured')
                    ->query(fn (Builder $query): Builder => $query->where('is_featured', true))
                    ->label('Featured Projects'),

                Filter::make('is_published')
                    ->query(fn (Builder $query): Builder => $query->where('is_published', true))
                    ->label('Published Projects'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'view' => Pages\ViewProject::route('/{record}'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
