<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Service Content')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(onBlur: true),
                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),
                        TextInput::make('icon'),
                        Toggle::make('is_active')
                            ->required(),
                        \Filament\Forms\Components\FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->directory('services')
                            ->columnSpanFull()
                            ->live(),
                        Textarea::make('short_description')
                            ->required()
                            ->columnSpanFull()
                            ->live(onBlur: true),
                        \Filament\Forms\Components\RichEditor::make('description')
                            ->required()
                            ->columnSpanFull()
                            ->live(debounce: 1000),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('Website Preview')
                    ->description('This is a live preview of how the elements will appear on the website.')
                    ->schema([
                        \Filament\Forms\Components\Placeholder::make('preview')
                            ->label('Grid Card Preview')
                            ->content(function (\Filament\Schemas\Components\Utilities\Get $get) {
                                $title = $get('title') ?: 'Hardware Support & Maintenance';
                                $desc = $get('short_description') ?: 'Reliable support and maintenance to keep your hardware running optimally.';
                                
                                $imagePath = $get('image');
                                if (is_array($imagePath)) {
                                    $imagePath = array_values($imagePath)[0] ?? null;
                                }
                                
                                if ($imagePath instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile) {
                                    $imageUrl = $imagePath->temporaryUrl();
                                } elseif (!$imagePath) {
                                    $imageUrl = asset('images/binolex/sv_hardware.png');
                                } else {
                                    $imageUrl = str_starts_with($imagePath, 'images/') 
                                        ? asset($imagePath) 
                                        : \Illuminate\Support\Facades\Storage::url($imagePath);
                                }
                                
                                return new \Illuminate\Support\HtmlString('
                                <div style="max-width: 400px; margin: 0 auto; color: #232323">
                                    <div style="padding: 40px; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.1); background: #fff; display: flex; flex-direction: column;">
                                        <div style="text-align: center; margin-bottom: 30px;">
                                            <img src="' . $imageUrl . '" style="height: 250px; width: auto; object-fit: contain;">
                                        </div>
                                        <div style="margin-top: auto; display: flex; flex-direction: column;">
                                            <span style="font-weight: 600; font-size: 18px; margin-bottom: 5px; color: #333; line-height: 1.2;">' . e($title) . '</span>
                                            <p style="color: #666; margin: 0; font-size: 15px; line-height: 1.6;">' . e($desc) . '</p>
                                        </div>
                                    </div>
                                </div>
                                ');
                            }),

                        \Filament\Forms\Components\Placeholder::make('detail_preview')
                            ->label('Detail Page Preview')
                            ->content(function (\Filament\Schemas\Components\Utilities\Get $get) {
                                $title = $get('title') ?: 'Hardware Support & Maintenance';
                                $desc = $get('description') ?: '<p>Your full service description and details will appear here...</p>';
                                $imagePath = $get('image');
                                if (is_array($imagePath)) {
                                    $imagePath = array_values($imagePath)[0] ?? null;
                                }
                                
                                if ($imagePath instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile) {
                                    $imageUrl = $imagePath->temporaryUrl();
                                } elseif (!$imagePath) {
                                    $imageUrl = asset('images/binolex/sv_hardware.png');
                                } else {
                                    $imageUrl = str_starts_with($imagePath, 'images/') 
                                        ? asset($imagePath) 
                                        : \Illuminate\Support\Facades\Storage::url($imagePath);
                                }

                                return new \Illuminate\Support\HtmlString('
                                <div style="margin: 0 auto; color: #666; font-size: 16px; line-height: 1.8; background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.05); margin-top: 30px; display: flex; flex-direction: column; max-width: 800px;">
                                    <h4 style="font-size: 28px; font-weight: 700; color: #333; margin-bottom: 20px;">' . e($title) . '</h4>
                                    <div style="text-align: center; margin-bottom: 30px;">
                                        <img src="' . $imageUrl . '" style="width: 100%; max-height: 400px; object-fit: contain; border-radius: 10px; background: #f8f9fa;">
                                    </div>
                                    <div class="prose max-w-none" style="color: #666; font-size: 16px;">
                                        ' . $desc . '
                                    </div>
                                </div>
                                ');
                            })
                    ]),
            ]);
    }
}
