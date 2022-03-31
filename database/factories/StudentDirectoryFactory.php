<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\StudentDirectory;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentDirectoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentDirectory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'registered_status' => $this->faker->boolean,
            'studentCard_id' => $this->faker->numberBetween(10000000, 10000000),
        ];
    }
}
