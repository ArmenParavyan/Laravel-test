<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = \App\Models\Book::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => $this->faker->name, 
            'title' => $this->faker->sentence,  
            'email' => $this->faker->safeEmail, 
            'age' => $this->faker->numberBetween(18, 100), 
            'is_book' => $this->faker->boolean, 
            'birthday' => $this->faker->date
        ];
    }
}
