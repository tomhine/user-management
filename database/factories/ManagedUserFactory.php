<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ManagedUser>
 */
class ManagedUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'job_title' => $this->getRandomJobTitle(),
            'contact_number' => fake()->phoneNumber(),
        ];
    }

    private function getRandomJobTitle(): string
    {
        $jobs = ['sales assistant', 'sales manager', 'account manager', 'customer service agent'];

        return $jobs[rand(0, count($jobs) - 1)];
    }
}
