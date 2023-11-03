<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalJumatResource\Pages;
use App\Filament\Resources\JadwalJumatResource\RelationManagers;
use App\Models\JadwalJumat;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalJumatResource extends Resource
{
    protected static ?string $model = JadwalJumat::class;
    protected static ?string $navigationIcon = 'heroicon-s-calendar-days';
    protected static ?string $navigationLabel = 'Jadwal Jumat';
    protected static ?string $pluralModelLabel = 'Jadwal Jumat';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\DatePicker::make('tanggal')
                    ->native(false)
                    ->displayFormat('l, d F Y')
                    ->closeOnDateSelection()
                    ->prefixIcon('heroicon-s-calendar')
                    ->required(),
                Forms\Components\TextInput::make('imam')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('khotib')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('muazin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('judul_khotbah')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal')
                    ->date('l, d F Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('imam')
                    ->searchable(),
                Tables\Columns\TextColumn::make('khotib')
                    ->searchable(),
                Tables\Columns\TextColumn::make('muazin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('judul_khotbah')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListJadwalJumats::route('/'),
            'create' => Pages\CreateJadwalJumat::route('/create'),
            'edit' => Pages\EditJadwalJumat::route('/{record}/edit'),
        ];
    }    
}
