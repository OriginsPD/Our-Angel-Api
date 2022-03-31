<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RegisteredStudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegisteredStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegisteredStudent::factory(10)->create();
    }
}
