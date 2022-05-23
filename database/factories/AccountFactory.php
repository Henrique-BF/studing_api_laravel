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
        $email = $this->faker->unique()->safeEmail();
        $name = $this->faker->name();

        return [
            'name' => $this->faker->name(),
            'email' => $name,
            'age' => $this->faker->numberBetween(18,40),
            'user_id' => User::factory()->create(['email' => $email, 'name' => $name]),
        ];
    }
}
