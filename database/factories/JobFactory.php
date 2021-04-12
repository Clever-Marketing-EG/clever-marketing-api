<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => [$this->faker->sentence, $this->faker->sentence, $this->faker->sentence],
            'requirements' => [$this->faker->sentence, $this->faker->sentence, $this->faker->sentence],
            'image_url' => $this->faker->imageUrl()
        ];
    }
}
