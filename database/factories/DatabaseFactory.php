<?php

namespace Database\Factories;

use App\Models\Database;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Database>
 */
class DatabaseFactory extends Factory
{
    protected $model = Database::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'database-' . $this->faker->word(),
            'status' => $this->faker->boolean()
        ];
    }
}
