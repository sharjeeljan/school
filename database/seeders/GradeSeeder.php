<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grade::create(['grade' => 'I']);
        Grade::create(['grade' => 'II']);
        Grade::create(['grade' => 'III']);
        Grade::create(['grade' => 'IV']);
        Grade::create(['grade' => 'V']);
        Grade::create(['grade' => 'VI']);
        Grade::create(['grade' => 'VII']);
        Grade::create(['grade' => 'VIII']);
        Grade::create(['grade' => 'IX']);
        Grade::create(['grade' => 'X']);
    }
}
