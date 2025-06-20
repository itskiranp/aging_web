<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationResource\Pages;
use App\Filament\Resources\PublicationResource\RelationManagers;
use App\Models\Publication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('authors')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('journal')
                    ->maxLength(255),
                TextInput::make('year')
                    ->required()
                    ->numeric()
                    ->maxLength(4)
                    ->minValue(1900)
                    ->maxValue(now()->year),
                TextInput::make('volume')
                    ->maxLength(50),
                TextInput::make('issue')
                    ->maxLength(50),
                TextInput::make('pages')
                    ->maxLength(50)
                    ->label('Page Numbers (e.g., 123-145)'),
                TextInput::make('doi')
                    ->maxLength(255)
                    ->label('DOI')
                    ->prefix('https://doi.org/'),
                TextInput::make('url')
                    ->maxLength(255)
                    ->label('URL'),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('authors')
                    ->searchable()
                    ->wrap()
                    ->width('25%'),
                TextColumn::make('title')
                    ->searchable()
                    ->wrap()
                    ->width('30%'),
                TextColumn::make('journal')
                    ->searchable()
                    ->wrap(),
                TextColumn::make('year')
                    ->sortable()
                    ->alignCenter(),
                TextColumn::make('volume')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('issue')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('pages')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('doi')
                    ->label('DOI')
                    ->url(fn ($record) => $record->doi ? 'https://doi.org/'.$record->doi : null)
                    ->openUrlInNewTab()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('url')
                    ->label('URL')
                    ->url(fn ($record) => $record->url)
                    ->openUrlInNewTab()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('year', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('year')
                    ->options(fn () => Publication::query()
                        ->select('year')
                        ->distinct()
                        ->orderBy('year', 'desc')
                        ->pluck('year', 'year')
                    ),
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
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit' => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}