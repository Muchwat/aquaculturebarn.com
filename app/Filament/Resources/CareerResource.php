<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerResource\Pages;
use App\Filament\Resources\CareerResource\RelationManagers;
use App\Models\Career;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Job Title')->required(),
                Select::make('type')->label('Service')->searchable()->options([
                    "Full-time" => "Full-time",
                    "Part-time" => "Part-time",
                    "Contract/Temporary" => "Contract/Temporary",
                    "Freelance" => "Freelance",
                    "Internship" => "Internship",
                    "Remote/Telecommute" => "Remote/Telecommute",
                    "Seasonal" => "Seasonal",
                    "Freelance/Consulting" => "Freelance/Consulting",
                    "Shift Work" => "Shift Work",
                    "Volunteer" => "Volunteer",
                ])->required(),
                TextInput::make('location')->label('Location')->required(),
                TextInput::make('salary')->label('Salary'),
                DateTimePicker::make('closing_date')->label('Closing Date')->required(),
                Checkbox::make('published')->label('Publish')->default(true),
                RichEditor::make('description')->columnSpanFull()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->limit(50),
                TextColumn::make('type'),
                TextColumn::make('location'),
                TextColumn::make('salary'),
                TextColumn::make('closing_date'),
                CheckboxColumn::make('published'),
            ])->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListCareers::route('/'),
            'create' => Pages\CreateCareer::route('/create'),
            'edit' => Pages\EditCareer::route('/{record}/edit'),
        ];
    }
}
