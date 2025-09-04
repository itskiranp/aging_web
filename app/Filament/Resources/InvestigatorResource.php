<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvestigatorResource\Pages;
use App\Models\Investigator;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;



class InvestigatorResource extends Resource
{
    protected static ?string $model = Investigator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('position')->required(),
                TextInput::make('phone')->required(),
                TextInput::make('email')->email()->required(),

                TinyEditor::make('bio')
                    ->profile('default')
                    ->label('Bio')
                    ->nullable()
                    ->options([
                        'menubar' => false,
                        'plugins' => 'paste lists link',
                        'toolbar' => 'undo redo | bold italic underline | bullist numlist | alignleft aligncenter alignright | removeformat',
                        'paste_as_text' => true,
                        'paste_auto_cleanup_on_paste' => true,
                        'paste_remove_styles' => true,
                        'paste_remove_spans' => true,
                        'paste_strip_class_attributes' => 'all',
                    ]),

                TinyEditor::make('description')
                    ->profile('default')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull()
                    ->options([
                        'menubar' => false,
                        'plugins' => 'paste lists link',
                        'toolbar' => 'undo redo | bold italic underline | bullist numlist | alignleft aligncenter alignright | removeformat',
                        'paste_as_text' => true,
                        'paste_auto_cleanup_on_paste' => true,
                        'paste_remove_styles' => true,
                        'paste_remove_spans' => true,
                        'paste_strip_class_attributes' => 'all',
                    ]),

                FileUpload::make('image')
                    ->directory('images')
                    ->label('Image')
                    ->preserveFilenames()
                    ->nullable(),

                FileUpload::make('profile_pdf')
                    ->directory('uploads') // This ensures CVs are uploaded to /public/uploads
                    ->label('Curriculum Vitae'),
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
                ImageColumn::make('image')->label('Profile Pic')->circular(),
                TextColumn::make('created_at')->since(),
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
