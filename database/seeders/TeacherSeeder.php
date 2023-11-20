<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'firstName' => 'Ahmed',
            'LastName' => 'Anjum',
            'grade' => 'V',
        ]);

        Teacher::create([
            'firstName' => 'Sydney',
            'LastName' => 'Landress',
            'grade' => 'IV',
        ]);

        Teacher::create([
            'firstName' => 'Shoaib',
            'LastName' => 'Ahmed',
            'grade' => 'III',
        ]);

        Teacher::create([
            'firstName' => 'Umair',
            'LastName' => 'Ali',
            'grade' => 'II',
        ]);

        Teacher::create([
            'firstName' => 'Zeenat',
            'LastName' => 'Salman',
            'grade' => 'I',
        ]);

    }
}
