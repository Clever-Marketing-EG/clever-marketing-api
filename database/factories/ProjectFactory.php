<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'title_ar' => $this->faker->sentence,
            'description' => $this->faker->text,
            'description_ar' => $this->faker->text,
            'image_url' => $this->faker->imageUrl(),
            'additional_images_1' => $this->faker->imageUrl(),
            'additional_images_2' => $this->faker->imageUrl(),
            'type' => $this->faker->randomElement(['web', 'graphics', 'branding'])
        ];
    }
}
