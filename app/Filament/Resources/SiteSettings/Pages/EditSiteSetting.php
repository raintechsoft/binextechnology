<?php

namespace App\Filament\Resources\SiteSettings\Pages;

use App\Filament\Resources\SiteSettings\SiteSettingResource;
use Filament\Resources\Pages\EditRecord;

class EditSiteSetting extends EditRecord
{
    protected static string $resource = SiteSettingResource::class;

    public function mount(int|string $record = 1): void
    {
        $setting = \App\Models\SiteSetting::first();
        if (! $setting) {
            $setting = \App\Models\SiteSetting::create(['show_clients_page' => true]);
        }
        
        $this->record = $setting;
        parent::mount($setting->id);
    }
}
