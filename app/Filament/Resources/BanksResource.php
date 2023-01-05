<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BanksResource\Pages;
use App\Filament\Resources\BanksResource\RelationManagers;
use App\Models\Banks;
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

class BanksResource extends Resource
{
    protected static ?string $model = Banks::class;

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

                    TextInput::make('numero')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('ville')
                    ->required()
                    ->maxLength(255),


                    DatePicker::make('date_ouverture')
                    ->format('Y/m/d')
                    ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('numero')->sortable()->searchable(),
                TextColumn::make('ville')->sortable()->searchable(),
                TextColumn::make('date_ouverture'),
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
            'index' => Pages\ListBanks::route('/'),
            'create' => Pages\CreateBanks::route('/create'),
            'edit' => Pages\EditBanks::route('/{record}/edit'),
        ];
    }
}
