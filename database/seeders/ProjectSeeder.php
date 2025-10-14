<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Health Activity Reminder App',
            'description' => 'A Flutter app that helps users reduce seedentary habits by reminding them to move regularly.',
            'link' => 'https://github.com/vallerio/health-reminder',
        ]);
         Project::create([
            'title' => 'Digital Marketing for SMEs',
            'description' => 'A Laravel-based project that empowers local artisans through online marketing training.',
            'link' => 'https://github.com/vallerio/digital-marketing-ukm',
         ]);
    }
}
