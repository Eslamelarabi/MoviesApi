<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'popularity' => $this->faker->word,
            'vote_count' => $this->faker->text,
            'overview' => $this->faker->text,
            'title' => $this->faker->word,
            'original_language' => $this->faker->word,
            'original_title' => $this->faker->word,
            'vote_average' => $this->faker->text,

        ];
    }
}
