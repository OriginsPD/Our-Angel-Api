<?php

namespace Database\Seeders;

use App\Models\StudentDirectory;
use Illuminate\Database\Seeder;

class StudentDirectorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentDirectory::factory()->count(5)->create();
    }
}
