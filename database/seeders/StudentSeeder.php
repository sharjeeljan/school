<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'firstName' => 'Ibrahim',
            'lastName' => 'Shaikh',
            'age' => '9',
            'grade_id' => 5
        ]);

        Student::create([
            'firstName' => 'Zainab',
            'lastName' => 'Soomro',
            'age' => '8',
            'grade_id' => 4
        ]);

        Student::create([
            'firstName' => 'Rashid',
            'lastName' => 'Hussain',
            'age' => '10',
            'grade_id' => 6
        ]);

        Student::create([
            'firstName' => 'Abdullah',
            'lastName' => 'Ahmed',
            'age' => '10',
            'grade_id' => 6
        ]);

        Student::create([
            'firstName' => 'Muhammad',
            'lastName' => 'Rayyan',
            'age' => '10',
            'grade_id' => 6
        ]);

        Student::create([
            'firstName' => 'Ayesha',
            'lastName' => 'Kashif',
            'age' => '10',
            'grade_id' => 6
        ]);

        Student::create([
            'firstName' => 'Waliur',
            'lastName' => 'Rehman',
            'age' => '10',
            'grade_id' => 6
        ]);

        Student::create([
            'firstName' => 'Ameer',
            'lastName' => 'Daudpota',
            'age' => '10',
            'grade_id' => 6
        ]);

    }
}
