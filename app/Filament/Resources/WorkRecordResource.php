<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkRecordResource\Pages;
use App\Filament\Resources\WorkRecordResource\RelationManagers;
use App\Models\WorkRecord;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkRecordResource extends Resource
{
    protected static ?string $model = WorkRecord::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Work Record')
                    ->schema([
                        TextInput::make('project')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        TextInput::make('country')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('client')
                            ->required()
                            ->maxLength(255),


                        TextInput::make('period')
                            ->required()
                            ->maxLength(255),

                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),

                    ])
                    ->columns(3),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('country')
                    ->searchable(),
                TextColumn::make('client')
                    ->searchable(),
                TextColumn::make('period')
                    ->searchable(),
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
            'index' => Pages\ListWorkRecords::route('/'),
            'create' => Pages\CreateWorkRecord::route('/create'),
            'edit' => Pages\EditWorkRecord::route('/{record}/edit'),
        ];
    }
}
