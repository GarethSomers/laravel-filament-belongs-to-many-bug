<?php

namespace App\Filament\Resources\CollectionResource\RelationManagers;

use Filament\Resources\Form;
use Filament\Resources\RelationManagers\BelongsToManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class ParentsRelationManager extends BelongsToManyRelationManager
{
    protected static string $relationship = 'parents';

    protected static ?string $inverseRelationship = 'children';

    protected static ?string $recordTitleAttribute = 'title';

    protected bool $allowsDuplicates = true;

    /*

    Form and Table

    */

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
            ])
            ->filters([
                //
            ]);
    }

    public static function attachForm(Form $form): Form
    {
        return $form
            ->schema([
                static::getAttachFormRecordSelect()
            ]);
    }
}
