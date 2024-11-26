<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoaResource\Pages;
use App\Filament\Resources\DoaResource\RelationManagers;
use App\Models\Doa;
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

class DoaResource extends Resource
{
    protected static ?string $model = Doa::class;

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
                        titleAttribute: 'name',
                        modifyQueryUsing: fn(Builder $query) => $query->where('category_type', 'doa')
                    )
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->description(fn(Doa $record): string => $record->arabic_text)
                    ->wrap(),
                Tables\Columns\TextColumn::make('category.name')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDoas::route('/'),
            'create' => Pages\CreateDoa::route('/create'),
            'edit' => Pages\EditDoa::route('/{record}/edit'),
        ];
    }
}
