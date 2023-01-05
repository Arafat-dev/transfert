<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Filament\Resources\TransactionResource\Widgets\StatsOverview;

use Filament\Forms\Components\TextInput;


use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Pages\Page;

use Filament\Forms\Components\Card;
use App\Models\User;
use Filament\Forms\Components\DateTimePicker;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('id_beneficiaire')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('user_id')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('montant')

                    ->required(),


                    DateTimePicker::make('date_transaction')
                    ->required(),


                    TextInput::make('type')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('status')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('details')
                    ->label('Details')
                    ->required()

                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_beneficiaire')->sortable(),
                TextColumn::make('user_id')->sortable()->searchable(),
                TextColumn::make('montant')->sortable()->searchable(),
                TextColumn::make('date_transaction'),
                TextColumn::make('type')->sortable()->searchable(),
                TextColumn::make('status')->sortable(),
                TextColumn::make('details'),

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

    public static function getWidgets(): array
{
    return [
        StatsOverview::class,
    ];
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
