<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Client;
use App\Models\ContactSubmission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'binex@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('Binex@123'),
            ]
        );

        // 2. Services
        $services = [
            [
                'title' => 'Web Development',
                'slug' => Str::slug('Web Development'),
                'short_description' => 'Custom and responsive websites tailored to your needs.',
                'description' => 'We offer full-cycle web development services, from initial design and architecture to development, testing, and deployment. Our team excels in building scalable, secure, and high-performance web applications using modern technologies.',
                'is_active' => true,
            ],
            [
                'title' => 'Mobile App Development',
                'slug' => Str::slug('Mobile App Development'),
                'short_description' => 'Native and cross-platform mobile experiences.',
                'description' => 'Transform your business with our top-tier mobile application development services. We build intuitive, fast, and reliable mobile apps for iOS and Android platforms that engage users and deliver real business value.',
                'is_active' => true,
            ],
            [
                'title' => 'Digital Marketing',
                'slug' => Str::slug('Digital Marketing'),
                'short_description' => 'Data-driven marketing to grow your online presence.',
                'description' => 'Our comprehensive digital marketing strategies are designed to increase traffic, maximize conversions, and boost your brand visibility. Services include SEO, PPC advertising, social media management, and content marketing.',
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(['slug' => $service['slug']], $service);
        }

        // 3. Clients
        $clients = [
            [
                'name' => 'Acme Corp',
                'logo' => 'dummy_logo_acme.png',
                'is_active' => true,
            ],
            [
                'name' => 'Global Tech',
                'logo' => 'dummy_logo_global.png',
                'is_active' => true,
            ],
            [
                'name' => 'Nova Solutions',
                'logo' => 'dummy_logo_nova.png',
                'is_active' => true,
            ],
        ];

        foreach ($clients as $client) {
            // Because logo is required and cannot be null, we must include it in 'firstOrCreate' 
            // creation array. Fortunately 'firstOrCreate' uses the second array for remaining fields.
            Client::firstOrCreate(['name' => $client['name']], $client);
        }

        // 4. Contact Submissions / Social Media Settings
        ContactSubmission::firstOrCreate(
            ['email' => 'info@binextechnology.com'],
            [
                'name' => 'Binex Technology Contact',
                'phone' => '+1234567890',
                'message' => 'Main contact information for the website.',
                'fb_url' => 'https://facebook.com/binextechnology',
                'twitter_url' => 'https://twitter.com/binextechnology',
                'linkedin_url' => 'https://linkedin.com/company/binextechnology',
                'instagram_url' => 'https://instagram.com/binextechnology'
            ]
        );
    }
}
