<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

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
            'content' => $this->faker->text,
            'content_ar' => $this->faker->text,
            'note' => rand(0,1) === 1? $this->faker->text : '',
            'note_ar' => rand(0,1) === 1? $this->faker->text : '',
            'image_url' => $this->faker->imageUrl(),
        ];
    }
}
