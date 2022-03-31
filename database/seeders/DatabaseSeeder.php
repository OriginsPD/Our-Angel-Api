<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RegisteredStudent;
use Database\Seeders\RegisteredStudentSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(StudentDirectorySeeder::class);
        $this->call(GuardianSeeder::class);
        $this->call(RegisteredStudentSeeder::class);
    }
}
