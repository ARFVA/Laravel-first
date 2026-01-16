<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Guardian;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use GuzzleHttp\Promise\Create;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Guardian::factory(40)->create();
        Classroom::factory(5)->hasStudents(10)->Create();
        Subject::factory(40)->hasTeacher(1)->create();

        User::create([
            'name' => 'Admin Sekolah',
            'email' => 'admin@gmail.com',
            'password' => 'password',
            'role' => 'admin',
        ]);
    }
}
