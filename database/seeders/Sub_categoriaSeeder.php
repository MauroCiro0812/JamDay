<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sub_categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('sub_categoria')->insert([
            'nombre'=> 'Camisas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'Camisetas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'Trajes',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'Pantalones',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'Pantalonetas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'tenis',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'Zapatos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'Vestidos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'Faldas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'Shorts',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'Licra',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sub_categoria')->insert([
            'nombre'=> 'Playa',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}