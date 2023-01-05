<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StoresResource\Pages;
use App\Filament\Resources\StoresResource\RelationManagers;
use App\Models\Stores;
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
class StoresResource extends Resource
{
    protected static ?string $model = Stores::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('adresse')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('ville')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('compte')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('solde')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('patente')
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
                TextColumn::make('patante'),
                TextColumn::make('compte'),
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
            'index' => Pages\ListStores::route('/'),
            'create' => Pages\CreateStores::route('/create'),
            'edit' => Pages\EditStores::route('/{record}/edit'),
        ];
    }
}
