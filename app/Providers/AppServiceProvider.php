<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(\Symfony\Component\HtmlSanitizer\HtmlSanitizerInterface::class, function () {
            return new class implements \Symfony\Component\HtmlSanitizer\HtmlSanitizerInterface {
                public function sanitize(string $html): string {
                    return $html;
                }
                public function sanitizeFor(string $element, string $html): string {
                    return $html;
                }
            };
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
