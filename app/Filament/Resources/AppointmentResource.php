<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppointmentResource\Pages;
use App\Filament\Resources\AppointmentResource\RelationManagers;
use App\Models\Appointment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = 'Customer Management';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = false;


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
                        Forms\Components\TextInput::make('customer_phone')
                            ->tel()
                            ->required()
                            ->maxLength(20),
                        Forms\Components\Textarea::make('customer_address')
                            ->required()
                            ->rows(3),
                    ])->columns(2),

                Forms\Components\Section::make('Appointment Details')
                    ->schema([
                        Forms\Components\Select::make('service_type')
                            ->required()
                            ->options([
                                'consultation' => 'Consultation',
                                'inspection' => 'Roof Inspection',
                                'estimate' => 'On-site Estimate',
                                'maintenance' => 'Maintenance Service',
                                'emergency' => 'Emergency Service',
                            ]),
                        Forms\Components\DateTimePicker::make('preferred_datetime')
                            ->required(),
                        Forms\Components\DateTimePicker::make('alternative_datetime'),
                        Forms\Components\DateTimePicker::make('confirmed_datetime'),
                    ])->columns(2),

                Forms\Components\Section::make('Service Description')
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(4),
                    ]),

                Forms\Components\Section::make('Management')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->required()
                            ->options([
                                'pending' => 'Pending',
                                'confirmed' => 'Confirmed',
                                'completed' => 'Completed',
                                'cancelled' => 'Cancelled',
                                'rescheduled' => 'Rescheduled',
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
                        Forms\Components\Select::make('assigned_technician_id')
                            ->relationship('technician', 'name')
                            ->preload(),
                        Forms\Components\Textarea::make('admin_notes')
                            ->rows(3),
                        Forms\Components\Textarea::make('completion_notes')
                            ->rows(3),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('appointment_number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_type')
                    ->badge(),
                Tables\Columns\TextColumn::make('preferred_datetime')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'confirmed' => 'info',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                        'rescheduled' => 'gray',
                    }),
                Tables\Columns\TextColumn::make('technician.name')
                    ->label('Assigned Tech'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status'),
                Tables\Filters\SelectFilter::make('service_type'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('preferred_datetime', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppointments::route('/'),
            'create' => Pages\CreateAppointment::route('/create'),
            'view' => Pages\ViewAppointment::route('/{record}'),
            'edit' => Pages\EditAppointment::route('/{record}/edit'),
        ];
    }
}
