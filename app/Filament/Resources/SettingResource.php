<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('about_title')
                    ->required()
                    ->maxLength(255)->columnSpanFull(),
                Forms\Components\Textarea::make('about_description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('about_additional_description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('background_img')
                    ->required()
                    ,
                Forms\Components\FileUpload::make('avatar_img')
                    ->required()
                    ,
                Forms\Components\DateTimePicker::make('about_bod')
                    ->required(),
                Forms\Components\TextInput::make('about_phone')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('about_email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('about_address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('facts_description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('facts_num_1')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('facts_num_2')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('facts_num_3')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('facts_num_4')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('skills_description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('twitter_link')
                    ->required()->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook_link')
                    ->required()->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagram_link')
                    ->required()->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('zalo_link')
                    ->required()->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkin_link')
                    ->required()->url()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('about_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('background_img')
                    ->searchable(),
                Tables\Columns\TextColumn::make('avatar_img')
                    ->searchable(),
                Tables\Columns\TextColumn::make('about_bod')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('about_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('about_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('about_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facts_num_1')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('facts_num_2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('facts_num_3')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('facts_num_4')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('twitter_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagram_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('zalo_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('linkin_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSettings::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
