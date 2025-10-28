<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Manual examples
        Project::create([
            'title' => 'Health Activity Reminder App',
            'description' => 'A Flutter app that helps users reduce sedentary habits by reminding them to move regularly.',
            'image' => 'https://via.placeholder.com/640x480.png?text=Health+App',
            'link' => 'https://github.com/vallerio/health-reminder',
        ]);

        Project::create([
            'title' => 'Digital Marketing for SMEs',
            'description' => 'A Laravel-based project that empowers local artisans through online marketing training.',
            'image' => 'https://via.placeholder.com/640x480.png?text=Digital+Marketing',
            'link' => 'https://github.com/vallerio/digital-marketing-ukm',
        ]);

        // Optional: generate random fake projects using factory
        Project::factory()->count(5)->create();
    }
}
