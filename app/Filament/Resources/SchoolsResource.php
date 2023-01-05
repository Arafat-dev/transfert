<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SchoolsResource\Pages;
use App\Filament\Resources\SchoolsResource\RelationManagers;
use App\Models\Schools;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\TextInput;

use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Pages\Page;

use Filament\Forms\Components\Card;

use Filament\Forms\Components\DatePicker;


class SchoolsResource extends Resource
{
    protected static ?string $model = Schools::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('ville')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('adresse')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('Domaine')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                    DatePicker::make('date_creation')
                    ->required(),

                    TextInput::make('numero_compte')
                    ->required()
                    ->maxLength(255),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('ville')->sortable()->searchable(),
                TextColumn::make('adresse'),
                TextColumn::make('Domaine')->sortable()->searchable(),
                TextColumn::make('type')->sortable()->searchable(),
                TextColumn::make('date_création')->sortable(),
                TextColumn::make('numero_compte')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSchools::route('/'),
            'create' => Pages\CreateSchools::route('/create'),
            'edit' => Pages\EditSchools::route('/{record}/edit'),
        ];
    }
}
