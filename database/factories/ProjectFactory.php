<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // e.g. "Innovative Health Tracker"
            'description' => $this->faker->paragraph(3),
            'image' => $this->faker->imageUrl(640, 480, 'tech', true, 'Project'),
            'link' => $this->faker->url(),
        ];
    }
}
