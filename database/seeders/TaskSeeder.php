<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Complete Geography Lesson #5',
            'dueDate' => '31/12/2023',
            'teacher_id' => 1,
        ]);

        Task::create([
            'title' => 'Revise Math Exercise #20',
            'dueDate' => '31/12/2023',
            'teacher_id' => 1,
        ]);

        Task::create([
            'title' => 'Urdu poem',
            'dueDate' => '31/12/2023',
            'teacher_id' => 1,
        ]);

        Task::create([
            'title' => 'English learn vocabulary',
            'dueDate' => '31/12/2023',
            'teacher_id' => 1,
        ]);

    }
}
