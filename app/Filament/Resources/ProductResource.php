<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\ProductCategory; // Import the new ProductCategory model
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationGroup = 'Shop';

    /**
     * Defines the form schema for creating and editing products.
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        // Removed ->reactive() and afterStateUpdated from here
                        // TextInput::make('slug')
                        //     ->required()
                        //     ->maxLength(255)
                        //     ->unique(ignoreRecord: true),
                        // Removed ->reactive() from here, slug will be set on save
                        RichEditor::make('description')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        TextInput::make('price')
                            ->numeric()
                            ->required()
                            ->prefix('KSh ')
                            ->step(0.01)
                            ->minValue(0.01),
                        Select::make('product_category_id')
                            ->label('Category')
                            ->searchable()
                            ->options(ProductCategory::all()->pluck('name', 'id'))
                            ->required(),
                        FileUpload::make('images')
                            ->multiple()
                            ->image()
                            ->directory('product-images')
                            ->visibility('public')
                            ->reorderable()
                            ->maxFiles(5)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->enableOpen()
                            ->enableDownload(),
                    ])->columns(2),
            ]);
    }

    /**
     * Defines the table schema for listing products.
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('price')
                    ->money('KES')
                    ->sortable(),
                ImageColumn::make('images')
                    ->circular()
                    ->stacked()
                    ->limit(3)
                    ->limitedRemainingText(),
                TextColumn::make('category.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('product_category_id')
                    ->label('Product Category')
                    ->options(ProductCategory::all()->pluck('name', 'id')),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    /**
     * Defines any relationships that should be managed within the resource.
     */
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    /**
     * Defines the pages associated with this resource.
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
            'view' => Pages\ViewProduct::route('/{record}'),
        ];
    }

    /**
     * Defines the default query for the resource.
     */
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}