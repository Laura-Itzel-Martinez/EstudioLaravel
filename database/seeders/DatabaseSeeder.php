<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\personasFactory;
use App\Models\Personas;
use App\Models\Curso;
use Database\Factories\CursoFactory;
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
        Personas::factory(10)->create();
        
    }
}
