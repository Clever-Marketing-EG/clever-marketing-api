<?php

namespace Database\Factories;

use App\Models\Process;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProcessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Process::class;

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
            'image_url' => $this->faker->imageUrl()
        ];
    }
}
