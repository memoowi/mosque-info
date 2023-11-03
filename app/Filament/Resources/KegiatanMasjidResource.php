<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanMasjidResource\Pages;
use App\Filament\Resources\KegiatanMasjidResource\RelationManagers;
use App\Models\KegiatanMasjid;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KegiatanMasjidResource extends Resource
{
    protected static ?string $model = KegiatanMasjid::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('nama_kegiatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tempat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal')
                    ->native(false)
                    ->displayFormat('l, d F Y')
                    ->closeOnDateSelection()
                    ->prefixIcon('heroicon-s-calendar')
                    ->required(),
                Forms\Components\TimePicker::make('waktu')
                    ->native(false)
                    ->displayFormat('H:i')
                    ->prefixIcon('heroicon-s-clock')
                    ->suffix(' WIB')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_kegiatan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tempat')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date('l, d F Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('waktu')
                    ->time('H:i')
                    ->suffix(' WIB'),
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
            'index' => Pages\ListKegiatanMasjids::route('/'),
            'create' => Pages\CreateKegiatanMasjid::route('/create'),
            'edit' => Pages\EditKegiatanMasjid::route('/{record}/edit'),
        ];
    }    
}
