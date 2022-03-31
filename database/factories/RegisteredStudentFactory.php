<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Guardian;
use App\Models\RegisteredStudent;
use App\Models\StudentDirectory;

class RegisteredStudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RegisteredStudent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_dir_id' => StudentDirectory::factory(),
            'guardian_id' => Guardian::factory(),
        ];
    }
}
