<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'name_ar' => $this-> faker->name,
            'job' => $this->faker->jobTitle,
            'job_ar' => $this->faker->jobTitle,
            'profile' => rand(0,1) === 1? $this->faker->text : '',
            'profile_ar' => rand(0,1) === 1? $this->faker->text : '',
            'facebook' => $this->faker->url,
            'linkedin' => $this->faker->url
        ];
    }
}
