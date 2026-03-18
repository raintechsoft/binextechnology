<?php

namespace App\Filament\Resources\Clients\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('logo')
                    ->image()
                    ->required(),
                TextInput::make('url')
                    ->url(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
