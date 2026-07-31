<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $email = env('ADMIN_EMAIL', 'admin@binex.ie');
        $name = env('ADMIN_NAME', 'Binex Admin');
        $password = env('ADMIN_PASSWORD', 'Binex@Admin2026!');

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => $password,
                'email_verified_at' => now(),
            ],
        );

        if ($this->command) {
            $this->command->info("Admin user ready: {$email}");
            $this->command->line('Set ADMIN_EMAIL, ADMIN_NAME, and ADMIN_PASSWORD in .env to override defaults.');
        }
    }
}
