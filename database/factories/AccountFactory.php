<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        $email = $this->faker->unique()->safeEmail();

        return [
            'name' => $name,
            'email' => $email,
            'age' => $this->faker->numberBetween(18,40),
        ];
    }
}
