<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alumno;
use App\Models\Sede;
use App\Models\Personas;
use App\Models\Curso;
use App\Models\user;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Sede::factory(5)->create();
        Alumno::factory(5)->create();
        Personas::factory(5)->create();
        Curso::factory(5)->create();


    }
}
