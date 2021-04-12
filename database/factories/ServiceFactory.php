<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
//use Faker

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'name_ar' => $this->faker->sentence,
            'description' => $this->faker->text,
            'description_ar' => $this->faker->text,
            'points' => [$this->faker->sentence, $this->faker->sentence, $this->faker->sentence],
            'points_ar' => [$this->faker->sentence, $this->faker->sentence, $this->faker->sentence],
            'image_url' => $this->faker->imageUrl()
        ];
    }
}
