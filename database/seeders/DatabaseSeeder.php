<?php

namespace Database\Seeders;

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

        $this->call(CreateUsersSeeder::class);

        $this->call(MarcaSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(TallaSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(Sub_categoriaSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(InventarioSeeder::class);

    }
}
