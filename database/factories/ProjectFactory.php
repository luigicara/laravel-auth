<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()-> words(3, true),
            'description'=>fake()-> boolean()
                                            ? fake()->paragraph()
                                            : '',
            // 'main_image'=>fake()->imageUrl(360, 360, 'animals', true, 'cats'),
            'release_date'=>fake()->date(),
            'repo_link'=>fake()->url(),
        ];
    }
}
