<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePageContentResource\Pages;
use App\Filament\Resources\HomePageContentResource\RelationManagers;
use App\Models\HomePageContent;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;








class HomePageContentResource extends Resource
{
    protected static ?string $model = HomePageContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('main_text')
                    ->label('Main Text')
                    ->required(),
                RichEditor::make('why_this_matters')
                    ->label('Why This Matters Text')
                    ->required(),
                FileUpload::make('carousel_images')
                    ->label('Carousel Images')
                    ->multiple()
                    ->image()
                    ->required(),
                FileUpload::make('collaborators')
                    ->label('Collaborators Section')
                    ->multiple()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('main_text')->limit(500),
                TextColumn::make('why_this_matters')->limit(500),
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
            'index' => Pages\ListHomePageContents::route('/'),
            'create' => Pages\CreateHomePageContent::route('/create'),
            'edit' => Pages\EditHomePageContent::route('/{record}/edit'),
        ];
    }
}
