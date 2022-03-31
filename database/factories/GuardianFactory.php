<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Guardian;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuardianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guardian::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'trn' => $this->faker->numberBetween(10000000, 90000000),
        ];
    }
}
