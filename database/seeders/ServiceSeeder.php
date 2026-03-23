<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Hardware Support & Maintenance',
                'short_description' => 'Reliable support and maintenance to keep your hardware running optimally.',
                'image' => 'images/binolex/sv_hardware.png',
                'description' => '<p>Reliable support and maintenance to keep your hardware running optimally. We provide comprehensive repair, upgrade, and preventative maintenance for all your hardware endpoints to minimize downtime.</p>',
                'icon' => 'bi-laptop'
            ],
            [
                'title' => 'Software Support',
                'short_description' => 'Expert assistance to resolve your software issues and improve efficiency.',
                'image' => 'images/binolex/sv_software.png',
                'description' => '<p>Expert assistance to resolve your software issues and improve efficiency.</p>',
                'icon' => 'bi-window'
            ],
            [
                'title' => 'Professional Microsoft 365 Services',
                'short_description' => 'Seamless integration and management for your Microsoft 365 environment.',
                'image' => 'images/binolex/sv_m365.png',
                'description' => '<p>Seamless integration and management for your Microsoft 365 environment.</p>',
                'icon' => 'bi-microsoft'
            ],
            [
                'title' => 'Cloud Infrastructure Services',
                'short_description' => 'Scalable and secure cloud solutions tailored to your business needs.',
                'image' => 'images/binolex/sv_cloud.png',
                'description' => '<p>Scalable and secure cloud solutions tailored to your business needs.</p>',
                'icon' => 'bi-cloud'
            ],
            [
                'title' => 'Network Management Services',
                'short_description' => 'Comprehensive monitoring and management for robust network performance.',
                'image' => 'images/binolex/sv_network.png',
                'description' => '<p>Comprehensive monitoring and management for robust network performance.</p>',
                'icon' => 'bi-router'
            ],
            [
                'title' => 'Cybersecurity Services',
                'short_description' => 'Advanced protection to secure your sensitive data and IT assets.',
                'image' => 'images/binolex/sv_security.png',
                'description' => '<p>Advanced protection to secure your sensitive data and IT assets.</p>',
                'icon' => 'bi-shield-check'
            ],
            [
                'title' => 'Empower your IT Support/Project & Helpdesk',
                'short_description' => 'Responsive helpdesk support and efficient IT project implementation.',
                'image' => 'images/binolex/sv_support.png',
                'description' => '<p>Responsive helpdesk support and efficient IT project implementation.</p>',
                'icon' => 'bi-headset'
            ],
            [
                'title' => 'Backup and Disaster Recovery',
                'short_description' => 'Ensure business continuity with reliable backup and recovery plans.',
                'image' => 'images/binolex/sv_backup.png',
                'description' => '<p>Ensure business continuity with reliable backup and recovery plans.</p>',
                'icon' => 'bi-hdd-network'
            ],
            [
                'title' => 'Domain, Web & Email Hosting',
                'short_description' => 'Reliable hosting solutions and support for your online presence.',
                'image' => 'images/binolex/sv_hosting.png',
                'description' => '<p>Reliable hosting solutions and support for your online presence.</p>',
                'icon' => 'bi-globe'
            ],
            [
                'title' => 'IT Consulting and Project Services',
                'short_description' => 'Strategic consulting to align your IT with business objectives.',
                'image' => 'images/binolex/sv_consulting.png',
                'description' => '<p>Strategic consulting to align your IT with business objectives.</p>',
                'icon' => 'bi-briefcase'
            ],
        ];

        foreach ($services as $service) {
            $service['slug'] = Str::slug($service['title']);
            \App\Models\Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}
