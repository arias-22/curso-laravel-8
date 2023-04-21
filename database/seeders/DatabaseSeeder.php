<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\{ Categoria, Curso, Post };

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Categoria::factory(3)->create();
        Curso::factory(10)->create();
        Post::factory(90)->create();
    }
}
