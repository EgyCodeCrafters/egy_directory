<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DirectoryResource\Pages;
use App\Filament\Resources\DirectoryResource\Pages\CreateDirectory;
use App\Filament\Resources\DirectoryResource\Pages\EditDirectory;
use App\Filament\Resources\DirectoryResource\Pages\ListDirectories;
use App\Filament\Resources\DirectoryResource\RelationManagers;
use App\Models\Directory;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DirectoryResource extends Resource
{
    protected static ?string $model = Directory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->maxLength(255),
      

                    Select::make('categories')
    ->relationship('categories', 'name')
    ->multiple()
    ->preload(),

    Select::make('subCategories')
    ->label('Sub Categories')
    ->relationship('subCategories', 'name')
    ->multiple()
    ->searchable()
    ->preload(),
    

                // Select::make('country_id')
                //     ->relationship('country', 'name')
                //     ->required()
                //     ->preload(),
                // Select::make('city_id')
                //     ->relationship('city', 'name')
                //     ->required()
                //     ->preload(),
                Textarea::make('description')->columnSpanFull(),
                TextInput::make('phone')->tel(),
                TextInput::make('whatsapp'),
                TextInput::make('address')->maxLength(255),
                TextInput::make('google_map')->url(),
                Textarea::make('notes'),
                TextInput::make('email')->email(),
                TextInput::make('facebook')->url(),
                TextInput::make('twitter')->url(),
                TextInput::make('instagram')->url(),
                TextInput::make('website')->url(),
                TextInput::make('youtube')->url(),
                TextInput::make('linkedin')->url(),
                TextInput::make('telegram')->url(),
                // TextInput::make('cv_link')->url(),
                Toggle::make('is_approved')->inline(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('categories.name')->label('Categories')->badge()->sortable(),
                Tables\Columns\TextColumn::make('country.name')->label('Country')->sortable(),
                Tables\Columns\TextColumn::make('city.name')->label('City')->sortable(),
                Tables\Columns\IconColumn::make('is_approved')->boolean()->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_approved')
                    ->label('Approved')
                    ->trueLabel('Yes')
                    ->falseLabel('No'),
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
            'index' => Pages\ListDirectories::route('/'),
            'create' => Pages\CreateDirectory::route('/create'),
            'edit' => Pages\EditDirectory::route('/{record}/edit'),
        ];
    }
}
