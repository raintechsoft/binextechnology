<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Blade;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('Binex Technology Solutions')
            ->font('Inter')
            ->colors([
                'primary' => '#4c94f8',
            ])
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn (): string => Blade::render('<style>
                    body {
                        background-image: url("'.asset('images/binolex/bgpage.jpg').'") !important;
                        background-size: cover !important;
                        background-position: center !important;
                        background-attachment: fixed !important;
                    }
                    /* Glassy effect for the login form and dashboard widgets */
                    .fi-simple-main-ctn > section,
                    .fi-wi {
                        backdrop-filter: blur(10px);
                        background-color: rgba(255, 255, 255, 0.85) !important;
                        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1) !important;
                    }
                    .dark .fi-simple-main-ctn > section,
                    .dark .fi-wi {
                        background-color: rgba(24, 24, 27, 0.85) !important;
                    }
                    /* Translucent topbar and sidebar */
                    .fi-topbar, .fi-sidebar-header, .fi-sidebar {
                        background-color: rgba(255, 255, 255, 0.85) !important;
                        backdrop-filter: blur(10px) !important;
                    }
                    .dark .fi-topbar, .dark .fi-sidebar-header, .dark .fi-sidebar {
                        background-color: rgba(24, 24, 27, 0.85) !important;
                    }
                </style>')
            )
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
