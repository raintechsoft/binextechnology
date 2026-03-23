<?php

namespace App\Filament\Resources\SiteSettings;

use App\Filament\Resources\SiteSettings\Pages\EditSiteSetting;
use App\Models\SiteSetting;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete(\Illuminate\Database\Eloquent\Model $record): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('General')
                    ->schema([
                        Toggle::make('show_clients_page')
                            ->label('Show Clients Page')
                            ->required(),
                        \Filament\Forms\Components\TextInput::make('company_name'),
                        \Filament\Forms\Components\TextInput::make('address'),
                        \Filament\Forms\Components\TextInput::make('email')->email(),
                        \Filament\Forms\Components\TextInput::make('careers_email')->email(),
                        \Filament\Forms\Components\TextInput::make('support_text'),
                        \Filament\Forms\Components\TextInput::make('phone')->tel(),
                    ])->columns(2),
                \Filament\Schemas\Components\Section::make('Social Links')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('facebook_url')->url(),
                        \Filament\Forms\Components\TextInput::make('twitter_url')->url(),
                        \Filament\Forms\Components\TextInput::make('instagram_url')->url(),
                        \Filament\Forms\Components\TextInput::make('linkedin_url')->url(),
                        \Filament\Forms\Components\TextInput::make('behance_url')->url(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ToggleColumn::make('show_clients_page'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => EditSiteSetting::route('/'),
        ];
    }
}
