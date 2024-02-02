<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KeuanganMasjidResource\Pages;
use App\Filament\Resources\KeuanganMasjidResource\RelationManagers;
use App\Models\KeuanganMasjid;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KeuanganMasjidResource extends Resource
{
    protected static ?string $model = KeuanganMasjid::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\DatePicker::make('tanggal')
                    ->native(false)
                    ->displayFormat('l, d F Y')
                    ->prefixIcon('heroicon-o-calendar')
                    ->closeOnDateSelection()
                    ->required(),
                Forms\Components\TextInput::make('uraian')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pemasukan')
                    ->prefix('Rp')
                    ->minLength(1)
                    ->maxLength(11)
                    ->default(0)
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pengeluaran')
                    ->prefix('Rp')
                    ->minLength(1)
                    ->maxLength(11)
                    ->default(0)
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal')
                    ->date('l, d F Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('uraian')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pemasukan')
                    ->prefix('Rp ')
                    ->numeric(
                        decimalPlaces: 0,
                        decimalSeparator: ',',
                        thousandsSeparator: '.',
                    )
                    ->sortable(),
                Tables\Columns\TextColumn::make('pengeluaran')
                    ->prefix('Rp ')
                    ->numeric(
                        decimalPlaces: 0,
                        decimalSeparator: ',',
                        thousandsSeparator: '.',
                    )
                    ->sortable(),
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
            'index' => Pages\ListKeuanganMasjids::route('/'),
            'create' => Pages\CreateKeuanganMasjid::route('/create'),
            'edit' => Pages\EditKeuanganMasjid::route('/{record}/edit'),
        ];
    }    
}
