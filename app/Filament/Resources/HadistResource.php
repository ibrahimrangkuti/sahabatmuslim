<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HadistResource\Pages;
use App\Filament\Resources\HadistResource\RelationManagers;
use App\Models\Hadist;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class HadistResource extends Resource
{
    protected static ?string $model = Hadist::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (!$get('slug_is_custom')) {

                            $set('slug', Str::slug($state));
                        }
                    })
                    ->required(),
                Forms\Components\TextInput::make('slug')->readOnly(),
                Forms\Components\Select::make('category_id')
                    ->relationship(
                        name: 'category',
                        titleAttribute: 'name'
                    )
                    ->searchable()
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\Textarea::make('arabic_text')
                    ->rows(5)
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\Textarea::make('transliteration')
                    ->rows(5)
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\Textarea::make('meaning')
                    ->rows(5)
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\TextInput::make('source')
                    ->columnSpan(2)
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListHadists::route('/'),
            'create' => Pages\CreateHadist::route('/create'),
            'edit' => Pages\EditHadist::route('/{record}/edit'),
        ];
    }
}
