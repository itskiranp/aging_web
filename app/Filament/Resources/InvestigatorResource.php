<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvestigatorResource\Pages;
use App\Filament\Resources\InvestigatorResource\RelationManagers;
use App\Models\Investigator;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvestigatorResource extends Resource
{
    protected static ?string $model = Investigator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')->required(),
                TextInput::make('position')->required(),
                TextInput::make('phone')->required(),
                TextInput::make('email')->email()->required(),
                Textarea::make('bio')->nullable(),
                Textarea::make('description')->label('Description')->required(),  // Add the description field
                // FileUpload::make('profile_image')
                //     ->directory('images')
                //     ->image()
                //     ->imageEditor()
                //     ->maxSize(2048)
                //     ->nullable(),
                TextInput::make('profile_pic')
                ->label('Profile Pic')
                ->nullable(), 

                
                TextInput::make('profile_pdf')
                ->label('Profile PDF')
                ->nullable(),  

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('position'),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                ImageColumn::make('profile_image')->label('Profile Image')->circular(),
                TextColumn::make('created_at')->since()
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
            'index' => Pages\ListInvestigators::route('/'),
            'create' => Pages\CreateInvestigator::route('/create'),
            'edit' => Pages\EditInvestigator::route('/{record}/edit'),
        ];
    }
}
