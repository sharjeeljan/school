<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => password_hash("abcdef", PASSWORD_DEFAULT),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'School Principal',
            'email' => 'principal@gmail.com',
            'password' => password_hash("abcdef", PASSWORD_DEFAULT),
        ]);
        $user->assignRole('principal');

        $user = User::create([
            'name' => 'School Teacher',
            'email' => 'teacher@gmail.com',
            'password' => password_hash("abcdef", PASSWORD_DEFAULT),
        ]);
        $user->assignRole('teachers');

        $user = User::create([
            'name' => 'Student',
            'email' => 'student@gmail.com',
            'password' => password_hash("abcdef", PASSWORD_DEFAULT),
        ]);
        $user->assignRole('students');

    }
}
