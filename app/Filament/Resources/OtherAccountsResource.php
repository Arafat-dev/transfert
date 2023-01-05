<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OtherAccountsResource\Pages;
use App\Filament\Resources\OtherAccountsResource\RelationManagers;
use App\Models\OtherAccounts;
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


class OtherAccountsResource extends Resource
{
    protected static ?string $model = OtherAccounts::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                Card::make()
                ->schema([
                    TextInput::make('user_id')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('operateur')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('numero')
                    ->required()
                    ->maxLength(255)

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id')->sortable(),
                TextColumn::make('user_id')->sortable()->searchable(),
                TextColumn::make('operateur')->sortable()->searchable(),
                TextColumn::make('numero'),
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
            'index' => Pages\ListOtherAccounts::route('/'),
            'create' => Pages\CreateOtherAccounts::route('/create'),
            'edit' => Pages\EditOtherAccounts::route('/{record}/edit'),
        ];
    }
}
