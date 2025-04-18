<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryItemResource\Pages;
use App\Filament\Resources\GalleryItemResource\RelationManagers;
use App\Models\GalleryItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class GalleryItemResource extends Resource
{
    protected static ?string $model = GalleryItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Gallery Item Details')
                    ->schema([
                        Forms\Components\FileUpload::make('image_path')
                            ->label('Image')
                            ->image()
                            ->directory('gallery')
                            ->preserveFilenames()
                            ->maxSize(2048)
                            ->required()
                            ->imageEditor()
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(1),

                        Forms\Components\Select::make('category')
                            ->options([
                                'training' => 'Trainings',
                                'survey' => 'Surveys',
                                'lab' => 'Lab Work',
                                'other' => 'Other',
                            ])
                            ->required()
                            ->columnSpan(1),

                        Forms\Components\Textarea::make('description')
                            ->maxLength(500)
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),

                        Forms\Components\Toggle::make('is_active')
                            ->default(true)

                        ])
                            ->columns(2),

                            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                ->label('Image')
                ->disk('public'),
                
            Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable(),
                
            Tables\Columns\TextColumn::make('category')
                ->badge()
                ->formatStateUsing(fn (string $state): string => match($state) {
                    'training' => 'Trainings',
                    'survey' => 'Surveys',
                    'lab' => 'Lab Work',
                    default => 'Other',
                })
                ->color(fn (string $state): string => match ($state) {
                    'training' => 'info',
                    'survey' => 'success',
                    'lab' => 'warning',
                    default => 'gray',
                }),
                
            Tables\Columns\IconColumn::make('is_active')
                ->boolean()
                ->sortable(),
                
            Tables\Columns\TextColumn::make('sort_order')
                ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'training' => 'Trainings',
                        'survey' => 'Surveys',
                        'lab' => 'Lab Work',
                        'other' => 'Other',
                    ]),
                    
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc');
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
            'index' => Pages\ListGalleryItems::route('/'),
            'create' => Pages\CreateGalleryItem::route('/create'),
            'edit' => Pages\EditGalleryItem::route('/{record}/edit'),
        ];
    }
}
