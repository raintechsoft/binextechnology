<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Service::create([
            'title' => 'Development',
            'slug' => 'development',
            'short_description' => 'From startups to enterprises, we craft adaptable web solutions that scale with your business.',
            'description' => '<p>From startups to enterprises, we craft adaptable web solutions that scale with your business.</p>',
            'icon' => 'bi-laptop'
        ]);
        
        \App\Models\Service::create([
            'title' => 'UX / UI design',
            'slug' => 'ux-ui-design',
            'short_description' => 'We build real-world web solutions ideal for all project sizes and a range of requirements.',
            'description' => '<p>We build real-world web solutions ideal for all project sizes and a range of requirements.</p>',
            'icon' => 'bi-palette'
        ]);

        \App\Models\Client::create([
            'name' => 'Demo Client 1',
            'logo' => 'https://via.placeholder.com/150',
            'url' => '#'
        ]);
    }
}
