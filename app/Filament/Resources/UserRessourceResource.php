<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserRessourceResource\Pages;

use App\Filament\Resources\UserRessourceResource\RelationManagers;
use App\Models\UserRessource;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Filament\Resources\UserRessourceResource\Widgets\StatsOverview;

use Filament\Forms\Components\TextInput;

use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Pages\Page;

use Filament\Forms\Components\Card;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserRessourceResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('lastname')
                    ->required()
                    ->maxLength(255),

                    DatePicker::make('date_naissance')
                    ->format('Y/m/d')
                    ->required(),


                    TextInput::make('numero_CNI')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('telephone')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('adresse')
                    ->required()
                    ->maxLength(255),



                    TextInput::make('email')
                    ->label('Email Address')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('password')
                    ->password()
                    ->required(fn(Page $livewire):bool => $livewire instanceof CreateRecord)
                    ->minLength(8)
                    ->same('passwordConfirmation')
                    ->dehydrated(fn ($state) => filled($state))
                    ->dehydrateStateUsing(fn( $state) => Has::make($state)),

                    TextInput::make('passwordConfirmation')
                    ->password()
                    ->label('password Confirmation')
                    ->required(fn(Page $livewire):bool => $livewire instanceof CreateRecord)
                    ->minLength(8)
                    ->dehydrated(false)



                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('lastname')->sortable()->searchable(),
                TextColumn::make('date_naissance'),
                TextColumn::make('numero_CNI')->sortable()->searchable(),
                TextColumn::make('telephone')->sortable(),
                TextColumn::make('adresse'),
               TextColumn::make('email')->sortable(),

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
            'index' => Pages\ListUserRessources::route('/'),
            'create' => Pages\CreateUserRessource::route('/create'),
            'edit' => Pages\EditUserRessource::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }

}
