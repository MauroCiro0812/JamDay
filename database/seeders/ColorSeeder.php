<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('colores')->insert([
            'nombre'=> 'Negro',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Blanco',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Beige',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Gris',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Cafe',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Azul',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Amarillo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Naranja',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Vinotinto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Verde',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Dorado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Rosado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('colores')->insert([
            'nombre'=> 'Rojo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
