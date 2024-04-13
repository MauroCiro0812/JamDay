<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        // MEN PRODUCTS

        // CAMISAS

        DB::table('productos')->insert([
            'nombre' => 'Camisa blanca MCB1',
            'precio' => 75000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 2,
            'descripcion' => 'Es una camisa blanca de algodón, con corte regular, cuello puntiagudo, mangas largas y botones frontales. Versátil para cualquier ocasión, formal o casual.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisaBlanca1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa Blanca MCB2',
            'precio' => 75000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 4,
            'descripcion' => 'Es una camisa blanca de algodón, con corte regular, cuello puntiagudo, mangas largas y botones frontales. Versátil para cualquier ocasión, formal o casual.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisaBlanca2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa Blanca MCB3',
            'precio' => 75000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 3,
            'descripcion' => 'Es una camisa blanca de algodón, con corte regular, cuello puntiagudo, mangas largas y botones frontales. Versátil para cualquier ocasión, formal o casual.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisaBlanca3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa Café MCC1',
            'precio' => 60000,
            'id_marca' => 1,
            'id_color' => 5,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 5,
            'descripcion' => 'Es una camisa blanca de algodón, con corte regular, cuello puntiagudo, mangas largas y botones frontales. Versátil para cualquier ocasión, formal o casual.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisaCafe1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa playera MCP1',
            'precio' => 30000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 3,
            'descripcion' => 'Descubre nuestra camiseta de algodón suave, cómoda y duradera. Con su diseño clásico y variedad de colores, es un básico imprescindible para cualquier estilo y ocasión.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisaPlaya1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa playera MCP2',
            'precio' => 30000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 4,
            'descripcion' => 'Descubre nuestra camiseta de algodón suave, cómoda y duradera. Con su diseño clásico y variedad de colores, es un básico imprescindible para cualquier estilo y ocasión.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisaPlaya2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa playera MCP3',
            'precio' => 20000,
            'id_marca' => 1,
            'id_color' => 7,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 1,
            'descripcion' => 'Descubre nuestra camiseta de algodón suave, cómoda y duradera. Con su diseño clásico y variedad de colores, es un básico imprescindible para cualquier estilo y ocasión.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisaPlaya3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa playera MCP4',
            'precio' => 35000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 5,
            'descripcion' => 'Descubre nuestra camiseta de algodón suave, cómoda y duradera. Con su diseño clásico y variedad de colores, es un básico imprescindible para cualquier estilo y ocasión.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisaPlaya4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa playera MCP5',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 2,
            'descripcion' => 'Descubre nuestra camiseta de algodón suave, cómoda y duradera. Con su diseño clásico y variedad de colores, es un básico imprescindible para cualquier estilo y ocasión.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisaPlaya5_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa playera MCP6',
            'precio' => 30000,
            'id_marca' => 1,
            'id_color' => 8,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 5,
            'descripcion' => 'Descubre nuestra camiseta de algodón suave, cómoda y duradera. Con su diseño clásico y variedad de colores, es un básico imprescindible para cualquier estilo y ocasión.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisaPlaya6_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta blanca MCTB1',
            'precio' => 30000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 2,
            'id_talla' => 4,
            'descripcion' => 'Nuestra camiseta blanca es un clásico atemporal. Hecha de algodón suave, ofrece comodidad y versatilidad para cualquier ocasión. Un básico imprescindible en tu guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisetaBlanca1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta café MCTC1',
            'precio' => 15000,
            'id_marca' => 1,
            'id_color' => 5,
            'id_categoria' => 1,
            'id_sub_categoria' => 2,
            'id_talla' => 2,
            'descripcion' => 'Nuestra camiseta café combina comodidad y estilo. Hecha de algodón suave, es perfecta para cualquier ocasión. Un básico esencial con un toque de sofisticación.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisetaCafe1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta café MCTC2',
            'precio' => 10000,
            'id_marca' => 1,
            'id_color' => 5,
            'id_categoria' => 1,
            'id_sub_categoria' => 2,
            'id_talla' => 1,
            'descripcion' => 'Nuestra camiseta café combina comodidad y estilo. Hecha de algodón suave, es perfecta para cualquier ocasión. Un básico esencial con un toque de sofisticación.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenCamisetaCafe4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Gaban café MGC1',
            'precio' => 105000,
            'id_marca' => 1,
            'id_color' => 5,
            'id_categoria' => 1,
            'id_sub_categoria' => 3,
            'id_talla' => 5,
            'descripcion' => 'Nuestro gabán café es la combinación perfecta de estilo y funcionalidad. Hecho de materiales de alta calidad, ofrece calidez y durabilidad. Su color café añade un toque de elegancia a cualquier atuendo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenGabanCafe1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa leñadora MCL1',
            'precio' => 105000,
            'id_marca' => 1,
            'id_color' => 9,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 4,
            'descripcion' => 'Nuestra camisa leñadora es la elección perfecta para un look rústico y cómodo. Con su patrón a cuadros distintivo y tejido duradero, es ideal para los días más frescos. Un clásico atemporal para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenLe%C3%B1adora1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa leñadora MCL2',
            'precio' => 105000,
            'id_marca' => 1,
            'id_color' => 5,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 3,
            'descripcion' => 'Nuestra camisa leñadora es la elección perfecta para un look rústico y cómodo. Con su patrón a cuadros distintivo y tejido duradero, es ideal para los días más frescos. Un clásico atemporal para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenLe%C3%B1adora2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa leñadora MCL3',
            'precio' => 105000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 2,
            'descripcion' => 'Nuestra camisa leñadora es la elección perfecta para un look rústico y cómodo. Con su patrón a cuadros distintivo y tejido duradero, es ideal para los días más frescos. Un clásico atemporal para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Camisas/MenLe%C3%B1adora3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // PANTALONES

        DB::table('productos')->insert([
            'nombre' => 'Bermudas blanca MBB1',
            'precio' => 45000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 11,
            'descripcion' => 'Nuestras bermudas blancas son la elección perfecta para un look fresco y veraniego. Hechas de materiales ligeros, ofrecen comodidad y estilo para los días más calurosos. Un básico imprescindible para tu guardarropa de verano.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenBernudasBlancas1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón Bluejeans MPB1',
            'precio' => 90000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 12,
            'descripcion' => 'Nuestro bluejean es un básico imprescindible para cualquier guardarropa. Hecho de denim duradero, ofrece comodidad y estilo. Perfecto para cualquier ocasión, desde casual hasta semi-formal.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonAzul1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón Bluejeans MPB2',
            'precio' => 90000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 10,
            'descripcion' => 'Nuestro bluejean es un básico imprescindible para cualquier guardarropa. Hecho de denim duradero, ofrece comodidad y estilo. Perfecto para cualquier ocasión, desde casual hasta semi-formal.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonAzul4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pnatalón Beige MPB1',
            'precio' => 70000,
            'id_marca' => 1,
            'id_color' => 3,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 10,
            'descripcion' => 'Nuestro pantalón beige es la elección perfecta para un look sofisticado y versátil. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color neutro lo hace fácil de combinar con cualquier prenda. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonBeige1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón blanco MPB1',
            'precio' => 90000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 11,
            'descripcion' => 'Nuestro pantalón blanco es la elección perfecta para un look limpio y elegante. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color blanco lo hace versátil para combinar con cualquier prenda. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonBlanco1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón blanco MPB2',
            'precio' => 125000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 12,
            'descripcion' => 'Nuestro pantalón blanco es la elección perfecta para un look limpio y elegante. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color blanco lo hace versátil para combinar con cualquier prenda. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonBlanco2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón blanco MPB3',
            'precio' => 125000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 10,
            'descripcion' => 'Nuestro pantalón blanco es la elección perfecta para un look limpio y elegante. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color blanco lo hace versátil para combinar con cualquier prenda. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonBlanco3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón blanco MPB4',
            'precio' => 125000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 9,
            'descripcion' => 'Nuestro pantalón blanco es la elección perfecta para un look limpio y elegante. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color blanco lo hace versátil para combinar con cualquier prenda. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonBlanco4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón Negro MPN1',
            'precio' => 112000,
            'id_marca' => 1,
            'id_color' => 1,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 11,
            'descripcion' => 'Nuestro pantalón negro es un básico imprescindible para cualquier guardarropa. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color negro aporta un toque de elegancia y versatilidad a cualquier atuendo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonNegro1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón Negro MPN1',
            'precio' => 112000,
            'id_marca' => 1,
            'id_color' => 1,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 12,
            'descripcion' => 'Nuestro pantalón negro es un básico imprescindible para cualquier guardarropa. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color negro aporta un toque de elegancia y versatilidad a cualquier atuendo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonNegro3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantaloneta de playa MPP1',
            'precio' => 23000,
            'id_marca' => 1,
            'id_color' => 7,
            'id_categoria' => 1,
            'id_sub_categoria' => 5,
            'id_talla' => 9,
            'descripcion' => 'Nuestra pantaloneta de playa es la elección perfecta para un día soleado. Hecha de materiales ligeros y transpirables, ofrece comodidad y estilo. Ideal para disfrutar del mar y el sol.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonPlaya1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantaloneta de playa MPP2',
            'precio' => 23000,
            'id_marca' => 1,
            'id_color' => 7,
            'id_categoria' => 1,
            'id_sub_categoria' => 5,
            'id_talla' => 10,
            'descripcion' => 'Nuestra pantaloneta de playa es la elección perfecta para un día soleado. Hecha de materiales ligeros y transpirables, ofrece comodidad y estilo. Ideal para disfrutar del mar y el sol.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonPlaya2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantaloneta de playa MPP3',
            'precio' => 23000,
            'id_marca' => 1,
            'id_color' => 7,
            'id_categoria' => 1,
            'id_sub_categoria' => 5,
            'id_talla' => 11,
            'descripcion' => 'Nuestra pantaloneta de playa es la elección perfecta para un día soleado. Hecha de materiales ligeros y transpirables, ofrece comodidad y estilo. Ideal para disfrutar del mar y el sol.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonPlaya3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantaloneta de playa MPP4',
            'precio' => 23000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 5,
            'id_talla' => 9,
            'descripcion' => 'Nuestra pantaloneta de playa es la elección perfecta para un día soleado. Hecha de materiales ligeros y transpirables, ofrece comodidad y estilo. Ideal para disfrutar del mar y el sol.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonPlaya4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantaloneta de playa MPP5',
            'precio' => 23000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 1,
            'id_sub_categoria' => 5,
            'id_talla' => 11,
            'descripcion' => 'Nuestra pantaloneta de playa es la elección perfecta para un día soleado. Hecha de materiales ligeros y transpirables, ofrece comodidad y estilo. Ideal para disfrutar del mar y el sol.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonPlaya5_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantaloneta de playa MPP6',
            'precio' => 23000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 5,
            'id_talla' => 12,
            'descripcion' => 'Nuestra pantaloneta de playa es la elección perfecta para un día soleado. Hecha de materiales ligeros y transpirables, ofrece comodidad y estilo. Ideal para disfrutar del mar y el sol.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonPlaya6_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantaloneta de playa MPP7',
            'precio' => 23000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 5,
            'id_talla' => 10,
            'descripcion' => 'Nuestra pantaloneta de playa es la elección perfecta para un día soleado. Hecha de materiales ligeros y transpirables, ofrece comodidad y estilo. Ideal para disfrutar del mar y el sol.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonPlaya7_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón verde MPV1',
            'precio' => 90000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 12,
            'descripcion' => 'Nuestro pantalón verde es una elección audaz y elegante. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color verde aporta un toque de frescura y originalidad a cualquier atuendo. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonVerde1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón verde MPV2',
            'precio' => 90000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 1,
            'id_sub_categoria' => 4,
            'id_talla' => 9,
            'descripcion' => 'Nuestro pantalón verde es una elección audaz y elegante. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color verde aporta un toque de frescura y originalidad a cualquier atuendo. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Pantalones/MenPantalonVerde2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // TRAJES

        DB::table('productos')->insert([
            'nombre' => 'Traje azul MTA1',
            'precio' => 535000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 3,
            'id_talla' => 5,
            'descripcion' => '“Nuestro traje para hombre en azul es la elección perfecta para un look sofisticado y elegante. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color azul aporta un toque de profesionalismo y confianza a cualquier atuendo. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Trajes/MenTrajeAzul1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Traje beige MTB1',
            'precio' => 535000,
            'id_marca' => 1,
            'id_color' => 3,
            'id_categoria' => 1,
            'id_sub_categoria' => 3,
            'id_talla' => 4,
            'descripcion' => 'Nuestro traje beige para hombre es la elección perfecta para un look sofisticado y versátil. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color neutro lo hace fácil de combinar con cualquier prenda.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Trajes/MenTrajeCafe1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Traje café MTC1',
            'precio' => 535000,
            'id_marca' => 1,
            'id_color' => 5,
            'id_categoria' => 1,
            'id_sub_categoria' => 3,
            'id_talla' => 5,
            'descripcion' => 'Nuestro traje café para hombre combina elegancia y estilo. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color café aporta un toque de sofisticación a cualquier atuendo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Trajes/MenTrajeCafe3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Traje MIX MTM1',
            'precio' => 535000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 3,
            'id_talla' => 3,
            'descripcion' => 'Nuestra combinación de camisa azul y pantalón café es ideal para un look profesional y elegante. La camisa azul aporta un toque de frescura, mientras que el pantalón café añade un toque de elegancia. Ambas prendas están hechas de materiales de alta calidad para garantizar comodidad y durabilidad.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Trajes/MenTrajeCafe2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Traje negro MTN1',
            'precio' => 250000,
            'id_marca' => 1,
            'id_color' => 1,
            'id_categoria' => 1,
            'id_sub_categoria' => 3,
            'id_talla' => 2,
            'descripcion' => 'Nuestro traje negro para hombre es la elección perfecta para un look sofisticado y elegante. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. Su color negro aporta un toque de profesionalismo y confianza a cualquier atuendo. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Trajes/MenTrajeNegro1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Traje chaleco negro MTN5',
            'precio' => 236500,
            'id_marca' => 1,
            'id_color' => 1,
            'id_categoria' => 1,
            'id_sub_categoria' => 3,
            'id_talla' => 4,
            'descripcion' => 'Nuestro traje con chaleco negro para hombre es la elección perfecta para un look sofisticado y elegante. Hecho de materiales de alta calidad, ofrece comodidad y durabilidad. El chaleco negro añade un toque de distinción y formalidad a cualquier atuendo. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Trajes/MenTrajeNegro4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ZAPATOS

        DB::table('productos')->insert([
            'nombre' => 'Botas negras MZN1',
            'precio' => 325000,
            'id_marca' => 1,
            'id_color' => 1,
            'id_categoria' => 1,
            'id_sub_categoria' => 7,
            'id_talla' => 14,
            'descripcion' => ' Nuestras botas negras son la elección perfecta para un look sofisticado y versátil. Hechas de materiales de alta calidad, ofrecen comodidad y durabilidad. Su color negro aporta un toque de elegancia a cualquier atuendo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenBotas2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Botas negras - café MZN2',
            'precio' => 325000,
            'id_marca' => 1,
            'id_color' => 5,
            'id_categoria' => 1,
            'id_sub_categoria' => 7,
            'id_talla' => 16,
            'descripcion' => 'Nuestras botas negras con detalles en café combinan dos colores clásicos para un look único. Hechas de materiales de alta calidad, ofrecen comodidad y durabilidad. Esta combinación de colores aporta un toque de originalidad a cualquier atuendo. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenBotas1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis NIKE MZN1',
            'precio' => 232000,
            'id_marca' => 2,
            'id_color' => 6,
            'id_categoria' => 1,
            'id_sub_categoria' => 6,
            'id_talla' => 15,
            'descripcion' => 'Nuestros tenis Nike son la elección perfecta para un look deportivo y cómodo. Hechos con la calidad y la innovación que caracterizan a Nike, ofrecen comodidad, durabilidad y un diseño moderno. Son ideales para cualquier actividad, desde correr hasta un día casual en la ciudad. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenNike1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis NIKE MZN2',
            'precio' => 232000,
            'id_marca' => 2,
            'id_color' => 8,
            'id_categoria' => 1,
            'id_sub_categoria' => 6,
            'id_talla' => 16,
            'descripcion' => 'Nuestros tenis Nike son la elección perfecta para un look deportivo y cómodo. Hechos con la calidad y la innovación que caracterizan a Nike, ofrecen comodidad, durabilidad y un diseño moderno. Son ideales para cualquier actividad, desde correr hasta un día casual en la ciudad. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenNike2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis NIKE MZN3',
            'precio' => 232000,
            'id_marca' => 2,
            'id_color' => 11,
            'id_categoria' => 1,
            'id_sub_categoria' => 6,
            'id_talla' => 13,
            'descripcion' => 'Nuestros tenis Nike son la elección perfecta para un look deportivo y cómodo. Hechos con la calidad y la innovación que caracterizan a Nike, ofrecen comodidad, durabilidad y un diseño moderno. Son ideales para cualquier actividad, desde correr hasta un día casual en la ciudad. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenNike3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis NIKE MZN4',
            'precio' => 232000,
            'id_marca' => 2,
            'id_color' => 4,
            'id_categoria' => 1,
            'id_sub_categoria' => 6,
            'id_talla' => 14,
            'descripcion' => 'Nuestros tenis Nike son la elección perfecta para un look deportivo y cómodo. Hechos con la calidad y la innovación que caracterizan a Nike, ofrecen comodidad, durabilidad y un diseño moderno. Son ideales para cualquier actividad, desde correr hasta un día casual en la ciudad. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenNike4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis NIKE MZN5',
            'precio' => 232000,
            'id_marca' => 2,
            'id_color' => 4,
            'id_categoria' => 1,
            'id_sub_categoria' => 6,
            'id_talla' => 13,
            'descripcion' => 'Nuestros tenis Nike son la elección perfecta para un look deportivo y cómodo. Hechos con la calidad y la innovación que caracterizan a Nike, ofrecen comodidad, durabilidad y un diseño moderno. Son ideales para cualquier actividad, desde correr hasta un día casual en la ciudad. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenNike5_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis NIKE MZN6',
            'precio' => 232000,
            'id_marca' => 2,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 6,
            'id_talla' => 15,
            'descripcion' => 'Nuestros tenis Nike son la elección perfecta para un look deportivo y cómodo. Hechos con la calidad y la innovación que caracterizan a Nike, ofrecen comodidad, durabilidad y un diseño moderno. Son ideales para cualquier actividad, desde correr hasta un día casual en la ciudad. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenNike6_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis NIKE MZN7',
            'precio' => 232000,
            'id_marca' => 2,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 1,
            'id_talla' => 1,
            'descripcion' => 'Nuestros tenis Nike son la elección perfecta para un look deportivo y cómodo. Hechos con la calidad y la innovación que caracterizan a Nike, ofrecen comodidad, durabilidad y un diseño moderno. Son ideales para cualquier actividad, desde correr hasta un día casual en la ciudad. Un básico esencial para cualquier guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenNike7_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis JamDAY MTJ1',
            'precio' => 425000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 1,
            'id_sub_categoria' => 6,
            'id_talla' => 14,
            'descripcion' => 'Nuestros tenis Jamday son la elección perfecta para un look moderno y cómodo. Hechos con materiales de alta calidad, ofrecen comodidad, durabilidad y un diseño único. Son ideales para cualquier actividad, desde hacer deporte hasta un día casual en la ciudad.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenTenis1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Zapatos beige MZB1',
            'precio' => 156000,
            'id_marca' => 1,
            'id_color' => 5,
            'id_categoria' => 1,
            'id_sub_categoria' => 7,
            'id_talla' => 16,
            'descripcion' => 'Nuestros zapatos formales beige son la elección perfecta para un look sofisticado y versátil. Hechos de materiales de alta calidad, ofrecen comodidad y durabilidad. Su color beige aporta un toque de elegancia a cualquier atuendo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenZapatillasCafe1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Zapatos café MZC1',
            'precio' => 156000,
            'id_marca' => 1,
            'id_color' => 5,
            'id_categoria' => 1,
            'id_sub_categoria' => 7,
            'id_talla' => 15,
            'descripcion' => 'Nuestros zapatos formales café combinan elegancia y estilo. Hechos de materiales de alta calidad, ofrecen comodidad y durabilidad. Su color café aporta un toque de sofisticación a cualquier atuendo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenZapatillasCafe4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Zapatos negro MZN1',
            'precio' => 156000,
            'id_marca' => 1,
            'id_color' => 1,
            'id_categoria' => 1,
            'id_sub_categoria' => 7,
            'id_talla' => 13,
            'descripcion' => 'Nuestros zapatos formales negros son un básico imprescindible para cualquier guardarropa. Hechos de materiales de alta calidad, ofrecen comodidad y durabilidad. Su color negro aporta un toque de profesionalismo y confianza a cualquier atuendo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Hombre/Zapatos/MenZapatillasCafe3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //WOMEN PRODUCTS

        //CAMISAS

        DB::table('productos')->insert([
            'nombre' => 'Camisa amarilla WCA1',
            'precio' => 45000,
            'id_marca' => 1,
            'id_color' => 7,
            'id_categoria' => 2,
            'id_sub_categoria' => 1,
            'id_talla' => 1,
            'descripcion' => 'Resalta tu estilo con esta camisa amarilla para mujer. Confeccionada en tejido suave y ligero, esta prenda es perfecta para cualquier ocasión. Su vibrante tono amarillo aportará un toque de color a tu guardarropa, mientras que su corte clásico garantiza un ajuste cómodo. ¡Una elección brillante para el día a día',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisaAmarilla1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa perrito WCP1',
            'precio' => 23000,
            'id_marca' => 1,
            'id_color' => 4,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 2,
            'descripcion' => 'Destaca con esta camisa con estampado de perro. Hecha de algodón orgánico sostenible, esta camiseta no solo es cómoda sino también respetuosa con el medio ambiente. El estampado de perro añade un toque divertido y único, perfecto para los amantes de los perros. ¡Una elección genial para un look casual y alegre!',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisaPerro1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa blanca WCB1',
            'precio' => 50000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 1,
            'id_talla' => 3,
            'descripcion' => 'Clásica y versátil, esta camisa blanca es un elemento esencial en cualquier guardarropa. Hecha de algodón de alta calidad, ofrece una comodidad inigualable y una durabilidad excepcional. Su diseño atemporal la hace perfecta para cualquier ocasión, ya sea una reunión de negocios o una salida casual. ¡Una elección elegante y sofisticada para cualquier día!',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisaBlanca1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa blanca WCB2',
            'precio' => 50000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 1,
            'id_talla' => 4,
            'descripcion' => 'Clásica y versátil, esta camisa blanca es un elemento esencial en cualquier guardarropa. Hecha de algodón de alta calidad, ofrece una comodidad inigualable y una durabilidad excepcional. Su diseño atemporal la hace perfecta para cualquier ocasión, ya sea una reunión de negocios o una salida casual. ¡Una elección elegante y sofisticada para cualquier día!',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisaBlanca2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa blanca WCB3',
            'precio' => 50000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 1,
            'id_talla' => 3,
            'descripcion' => 'Clásica y versátil, esta camisa blanca es un elemento esencial en cualquier guardarropa. Hecha de algodón de alta calidad, ofrece una comodidad inigualable y una durabilidad excepcional. Su diseño atemporal la hace perfecta para cualquier ocasión, ya sea una reunión de negocios o una salida casual. ¡Una elección elegante y sofisticada para cualquier día!',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisaBlanca3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa floral WCF1',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 8,
            'id_categoria' => 2,
            'id_sub_categoria' => 1,
            'id_talla' => 4,
            'descripcion' => 'Exuda elegancia con esta camisa con estampados florales. Hecha con tejidos de alta calidad, esta camisa es tan cómoda como atractiva. El estampado floral añade un toque de naturaleza y sofisticación, perfecto para cualquier ocasión. Ya sea que la combines con jeans para un look casual o con pantalones de vestir para una ocasión más formal, esta camisa es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisaFloral1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa floral WCF2',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 12,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 1,
            'descripcion' => 'Exuda elegancia con esta camisa con estampados florales. Hecha con tejidos de alta calidad, esta camisa es tan cómoda como atractiva. El estampado floral añade un toque de naturaleza y sofisticación, perfecto para cualquier ocasión. Ya sea que la combines con jeans para un look casual o con pantalones de vestir para una ocasión más formal, esta camisa es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisaFloral2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa floral WCF4',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 1,
            'id_talla' => 4,
            'descripcion' => 'Exuda elegancia con esta camisa con estampados florales. Hecha con tejidos de alta calidad, esta camisa es tan cómoda como atractiva. El estampado floral añade un toque de naturaleza y sofisticación, perfecto para cualquier ocasión. Ya sea que la combines con jeans para un look casual o con pantalones de vestir para una ocasión más formal, esta camisa es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisaFloral4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa rosada WCR1',
            'precio' => 19000,
            'id_marca' => 1,
            'id_color' => 12,
            'id_categoria' => 2,
            'id_sub_categoria' => 1,
            'id_talla' => 1,
            'descripcion' => 'Irradia feminidad con esta camisa rosada. Confeccionada en un suave tejido, esta camisa ofrece tanto estilo como comodidad. Su encantador tono rosado complementa cualquier tono de piel y añade un toque de dulzura a cualquier atuendo. Ya sea para una salida casual o una ocasión especial, esta camisa rosada es una elección encantadora que realzará tu guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisetaRoja1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa Verde WCV1 ',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 1,
            'id_talla' => 2,
            'descripcion' => 'Destaca con estilo con esta camisa verde. Hecha de un tejido suave y transpirable, esta camisa es perfecta para cualquier ocasión. Su vibrante tono verde aportará un toque de frescura a tu guardarropa. Ya sea para el trabajo o para una salida casual, esta camisa verde es una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisaVerde1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camisa Verde WCV2',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 1,
            'id_talla' => 4,
            'descripcion' => 'Destaca con estilo con esta camisa verde. Hecha de un tejido suave y transpirable, esta camisa es perfecta para cualquier ocasión. Su vibrante tono verde aportará un toque de frescura a tu guardarropa. Ya sea para el trabajo o para una salida casual, esta camisa verde es una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamisaVerde2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta WC1',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 1,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 3,
            'descripcion' => 'Añade un toque de diversión a tu guardarropa con esta camiseta con estampado. Ya sea un diseño gráfico audaz o un estampado sutil, esta camiseta seguramente llamará la atención.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamiseta1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta WC2',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 1,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 1,
            'descripcion' => 'Añade un toque de diversión a tu guardarropa con esta camiseta con estampado. Ya sea un diseño gráfico audaz o un estampado sutil, esta camiseta seguramente llamará la atención',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamiseta2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta WC3',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 5,
            'descripcion' => 'Muestra tu amor por tu marca favorita con esta camiseta con logo. Hecha de algodón de alta calidad, esta camiseta no solo es cómoda, sino que también te permite expresar tu estilo personal.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamiseta3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta WC4',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 3,
            'descripcion' => 'Esta camiseta de color sólido es un básico imprescindible. Hecha de algodón suave, es perfecta para cualquier ocasión. Combínala con jeans para un look casual o con pantalones de vestir para un look más formal.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamiseta4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta WC5',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 2,
            'descripcion' => 'Esta camiseta de color sólido es un básico imprescindible. Hecha de algodón suave, es perfecta para cualquier ocasión. Combínala con jeans para un look casual o con pantalones de vestir para un look más formal.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamiseta5_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta WC6',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 3,
            'descripcion' => 'Esta camiseta de color sólido es un básico imprescindible. Hecha de algodón suave, es perfecta para cualquier ocasión. Combínala con jeans para un look casual o con pantalones de vestir para un look más formal.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamiseta6_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta WC7',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 4,
            'descripcion' => 'Añade un toque de diversión a tu guardarropa con esta camiseta con estampado. Ya sea un diseño gráfico audaz o un estampado sutil, esta camiseta seguramente llamará la atención',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamiseta7_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta WC8',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 1,
            'descripcion' => 'Añade un toque de diversión a tu guardarropa con esta camiseta con estampado. Ya sea un diseño gráfico audaz o un estampado sutil, esta camiseta seguramente llamará la atención',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamiseta8_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta WC9',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 2,
            'descripcion' => 'Añade un toque de diversión a tu guardarropa con esta camiseta con estampado. Ya sea un diseño gráfico audaz o un estampado sutil, esta camiseta seguramente llamará la atención',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamiseta9_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Camiseta WC9',
            'precio' => 25000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 2,
            'id_talla' => 1,
            'descripcion' => 'Añade un toque de diversión a tu guardarropa con esta camiseta con estampado. Ya sea un diseño gráfico audaz o un estampado sutil, esta camiseta seguramente llamará la atención',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Camisas/WomanCamiseta10_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // FALDAS

        DB::table('productos')->insert([
            'nombre' => 'Falda a cuadros WFC1',
            'precio' => 33200,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 6,
            'descripcion' => 'Realza tu estilo con esta falda a cuadros. Confeccionada con un tejido de alta calidad, esta falda combina comodidad y durabilidad. El estampado a cuadros añade un toque clásico y versátil, perfecto para cualquier ocasión. Ya sea para el trabajo o para una salida casual, esta falda a cuadros es una elección elegante y sofisticada.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaCuados1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda a cuadros WFC2',
            'precio' => 33200,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 7,
            'descripcion' => 'Realza tu estilo con esta falda a cuadros. Confeccionada con un tejido de alta calidad, esta falda combina comodidad y durabilidad. El estampado a cuadros añade un toque clásico y versátil, perfecto para cualquier ocasión. Ya sea para el trabajo o para una salida casual, esta falda a cuadros es una elección elegante y sofisticada.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaCuados2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda florar WFF1',
            'precio' => 54000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 8,
            'descripcion' => 'Deslumbra con esta falda con estampados florales. Confeccionada con tejidos de alta calidad, esta falda es tan cómoda como atractiva. El estampado floral añade un toque de naturaleza y sofisticación, perfecto para cualquier ocasión. Ya sea que la combines con una camiseta para un look casual o con una blusa para una ocasión más formal, esta falda con flores es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaFlores1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda florar WFF2',
            'precio' => 54000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 8,
            'descripcion' => 'Deslumbra con esta falda con estampados florales. Confeccionada con tejidos de alta calidad, esta falda es tan cómoda como atractiva. El estampado floral añade un toque de naturaleza y sofisticación, perfecto para cualquier ocasión. Ya sea que la combines con una camiseta para un look casual o con una blusa para una ocasión más formal, esta falda con flores es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaFlores2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda florar WFF3',
            'precio' => 54000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 7,
            'descripcion' => 'Deslumbra con esta falda con estampados florales. Confeccionada con tejidos de alta calidad, esta falda es tan cómoda como atractiva. El estampado floral añade un toque de naturaleza y sofisticación, perfecto para cualquier ocasión. Ya sea que la combines con una camiseta para un look casual o con una blusa para una ocasión más formal, esta falda con flores es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaFlores3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda florar WFF4',
            'precio' => 54000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 6,
            'descripcion' => 'Deslumbra con esta falda con estampados florales. Confeccionada con tejidos de alta calidad, esta falda es tan cómoda como atractiva. El estampado floral añade un toque de naturaleza y sofisticación, perfecto para cualquier ocasión. Ya sea que la combines con una camiseta para un look casual o con una blusa para una ocasión más formal, esta falda con flores es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaFlores4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda aqua WFA1',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 6,
            'descripcion' => 'Destaca con esta falda verdeazul. Confeccionada con un tejido de alta calidad, esta falda combina comodidad y durabilidad. Su vibrante tono verdeazul añade un toque de frescura a tu guardarropa. Ya sea para el trabajo o para una salida casual, esta falda verdeazul es una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaAzul1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda aqua WFA2',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 7,
            'descripcion' => 'Destaca con esta falda verdeazul. Confeccionada con un tejido de alta calidad, esta falda combina comodidad y durabilidad. Su vibrante tono verdeazul añade un toque de frescura a tu guardarropa. Ya sea para el trabajo o para una salida casual, esta falda verdeazul es una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaAzul2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda aqua WFA3',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 8,
            'descripcion' => 'Destaca con esta falda verdeazul. Confeccionada con un tejido de alta calidad, esta falda combina comodidad y durabilidad. Su vibrante tono verdeazul añade un toque de frescura a tu guardarropa. Ya sea para el trabajo o para una salida casual, esta falda verdeazul es una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaVerde4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda aqua WFA4',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 6,
            'descripcion' => 'Destaca con esta falda verdeazul. Confeccionada con un tejido de alta calidad, esta falda combina comodidad y durabilidad. Su vibrante tono verdeazul añade un toque de frescura a tu guardarropa. Ya sea para el trabajo o para una salida casual, esta falda verdeazul es una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaVerde3.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda aqua WFA5',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 8,
            'descripcion' => 'Destaca con esta falda verdeazul. Confeccionada con un tejido de alta calidad, esta falda combina comodidad y durabilidad. Su vibrante tono verdeazul añade un toque de frescura a tu guardarropa. Ya sea para el trabajo o para una salida casual, esta falda verdeazul es una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaVerde4.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda aqua WFA6',
            'precio' => 65000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 7,
            'descripcion' => 'Destaca con esta falda verdeazul. Confeccionada con un tejido de alta calidad, esta falda combina comodidad y durabilidad. Su vibrante tono verdeazul añade un toque de frescura a tu guardarropa. Ya sea para el trabajo o para una salida casual, esta falda verdeazul es una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaVerde5_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda verde WFV1',
            'precio' => 33200,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 7,
            'descripcion' => 'Destaca con esta falda verde. Confeccionada con un tejido de alta calidad, esta falda combina comodidad y durabilidad. Su vibrante tono verde añade un toque de frescura a tu guardarropa. Ya sea para el trabajo o para una salida casual, esta falda verde es una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaVerde1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda roja WFR1',
            'precio' => 18500,
            'id_marca' => 1,
            'id_color' => 8,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 6,
            'descripcion' => 'Añade un toque de pasión a tu guardarropa con esta falda roja. Hecha de un tejido de alta calidad, esta falda es tan cómoda como elegante. Su vibrante tono rojo es perfecto para hacer una declaración de estilo audaz. Ya sea para una noche de fiesta o para una salida casual, esta falda roja es una elección segura para destacar.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaRoja1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda roja WFR2',
            'precio' => 18500,
            'id_marca' => 1,
            'id_color' => 13,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 8,
            'descripcion' => 'Añade un toque de pasión a tu guardarropa con esta falda roja. Hecha de un tejido de alta calidad, esta falda es tan cómoda como elegante. Su vibrante tono rojo es perfecto para hacer una declaración de estilo audaz. Ya sea para una noche de fiesta o para una salida casual, esta falda roja es una elección segura para destacar.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaRoja2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda rosada WFR3',
            'precio' => 33200,
            'id_marca' => 1,
            'id_color' => 12,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 6,
            'descripcion' => 'Irradia feminidad con esta falda rosada. Confeccionada en un suave tejido, esta falda ofrece tanto estilo como comodidad. Su encantador tono rosado complementa cualquier tono de piel y añade un toque de dulzura a cualquier atuendo. Ya sea para una salida casual o una ocasión especial, esta falda rosada es una elección encantadora que realzará tu guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaRoja3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Falda rosada WFR4',
            'precio' => 33200,
            'id_marca' => 1,
            'id_color' => 12,
            'id_categoria' => 2,
            'id_sub_categoria' => 9,
            'id_talla' => 7,
            'descripcion' => 'Irradia feminidad con esta falda rosada. Confeccionada en un suave tejido, esta falda ofrece tanto estilo como comodidad. Su encantador tono rosado complementa cualquier tono de piel y añade un toque de dulzura a cualquier atuendo. Ya sea para una salida casual o una ocasión especial, esta falda rosada es una elección encantadora que realzará tu guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Faldas/WomanFaldaRoja4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón amarillo WPA1',
            'precio' => 86000,
            'id_marca' => 1,
            'id_color' => 7,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 6,
            'descripcion' => 'Ilumina tu guardarropa con estos pantalones amarillos. Hechos de un tejido de alta calidad, estos pantalones son tan cómodos como duraderos. Su vibrante tono amarillo es perfecto para añadir un toque de color a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, estos pantalones amarillos son una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesAmarillos1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón amarillo WPA2',
            'precio' => 86000,
            'id_marca' => 1,
            'id_color' => 7,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 8,
            'descripcion' => 'Ilumina tu guardarropa con estos pantalones amarillos. Hechos de un tejido de alta calidad, estos pantalones son tan cómodos como duraderos. Su vibrante tono amarillo es perfecto para añadir un toque de color a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, estos pantalones amarillos son una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesAmarillos2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Patalón seda azul WPSA1',
            'precio' => 165000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 6,
            'descripcion' => 'Destaca con estos pantalones de seda azules. Hechos de seda de alta calidad, estos pantalones son tan lujosos como cómodos. Su tono azul profundo añade un toque de elegancia a cualquier atuendo. Ya sea para una ocasión especial o para una salida casual, estos pantalones de seda azules son una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesAzules1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Patalón seda azul WPSA2',
            'precio' => 165000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 6,
            'descripcion' => 'Destaca con estos pantalones de seda azules. Hechos de seda de alta calidad, estos pantalones son tan lujosos como cómodos. Su tono azul profundo añade un toque de elegancia a cualquier atuendo. Ya sea para una ocasión especial o para una salida casual, estos pantalones de seda azules son una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesAzules2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Patalón seda azul WPSA3',
            'precio' => 165000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 7,
            'descripcion' => 'Destaca con estos pantalones de seda azules. Hechos de seda de alta calidad, estos pantalones son tan lujosos como cómodos. Su tono azul profundo añade un toque de elegancia a cualquier atuendo. Ya sea para una ocasión especial o para una salida casual, estos pantalones de seda azules son una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesAzules3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Patalón seda azul WPSA4',
            'precio' => 165000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 7,
            'descripcion' => 'Destaca con estos pantalones de seda azules. Hechos de seda de alta calidad, estos pantalones son tan lujosos como cómodos. Su tono azul profundo añade un toque de elegancia a cualquier atuendo. Ya sea para una ocasión especial o para una salida casual, estos pantalones de seda azules son una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesAzules4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Patalón seda azul WPSA5',
            'precio' => 165000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 8,
            'descripcion' => 'Destaca con estos pantalones de seda azules. Hechos de seda de alta calidad, estos pantalones son tan lujosos como cómodos. Su tono azul profundo añade un toque de elegancia a cualquier atuendo. Ya sea para una ocasión especial o para una salida casual, estos pantalones de seda azules son una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesAzules5_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Patalón seda azul WPSA6',
            'precio' => 165000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 6,
            'descripcion' => 'Destaca con estos pantalones de seda azules. Hechos de seda de alta calidad, estos pantalones son tan lujosos como cómodos. Su tono azul profundo añade un toque de elegancia a cualquier atuendo. Ya sea para una ocasión especial o para una salida casual, estos pantalones de seda azules son una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesAzules6_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón verde WPV1 ',
            'precio' => 33200,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 6,
            'descripcion' => 'Destaca con estos pantalones verdes. Hechos de un tejido de alta calidad, estos pantalones son tan cómodos como duraderos. Su vibrante tono verde es perfecto para añadir un toque de frescura a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, estos pantalones verdes son una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesVerdes1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Licra floral WLF1',
            'precio' => 22000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 11,
            'id_talla' => 8,
            'descripcion' => 'Deslumbra con esta licra con estampado de flores. Hecha de un tejido elástico y cómodo, esta licra es perfecta para cualquier actividad. El estampado de flores añade un toque de naturaleza y feminidad, perfecto para cualquier ocasión. Ya sea para una clase de yoga o para un día de actividades al aire libre, esta licra con flores es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesFlores1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Licra floral WLF2',
            'precio' => 22000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 11,
            'id_talla' => 6,
            'descripcion' => 'Deslumbra con esta licra con estampado de flores. Hecha de un tejido elástico y cómodo, esta licra es perfecta para cualquier actividad. El estampado de flores añade un toque de naturaleza y feminidad, perfecto para cualquier ocasión. Ya sea para una clase de yoga o para un día de actividades al aire libre, esta licra con flores es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesFlores2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Licra floral WLF3',
            'precio' => 22000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 11,
            'id_talla' => 7,
            'descripcion' => 'Deslumbra con esta licra con estampado de flores. Hecha de un tejido elástico y cómodo, esta licra es perfecta para cualquier actividad. El estampado de flores añade un toque de naturaleza y feminidad, perfecto para cualquier ocasión. Ya sea para una clase de yoga o para un día de actividades al aire libre, esta licra con flores es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesFlores3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Licra floral WLF4',
            'precio' => 22000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 11,
            'id_talla' => 6,
            'descripcion' => 'Deslumbra con esta licra con estampado de flores. Hecha de un tejido elástico y cómodo, esta licra es perfecta para cualquier actividad. El estampado de flores añade un toque de naturaleza y feminidad, perfecto para cualquier ocasión. Ya sea para una clase de yoga o para un día de actividades al aire libre, esta licra con flores es una elección fabulosa para mostrar tu sentido del estilo.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesFlores4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón blanco WPB1',
            'precio' => 33200,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 8,
            'descripcion' => 'Destaca con estos pantalones blancos. Hechos de un tejido de alta calidad, estos pantalones son tan cómodos como duraderos. Su tono blanco puro es perfecto para añadir un toque de elegancia a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, estos pantalones blancos son una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesBlancos1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón blanco WPB2',
            'precio' => 33200,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 6,
            'descripcion' => 'Destaca con estos pantalones blancos. Hechos de un tejido de alta calidad, estos pantalones son tan cómodos como duraderos. Su tono blanco puro es perfecto para añadir un toque de elegancia a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, estos pantalones blancos son una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanPantalonesBlancos2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón militar WPM1',
            'precio' => 78000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 7,
            'descripcion' => 'Destaca con estos pantalones militares. Hechos de un tejido resistente y con múltiples bolsillos, estos pantalones son tan prácticos como duraderos. Su diseño táctico es perfecto para actividades al aire libre o para un look casual. Ya sea para acampar, senderismo o simplemente para el día a día, estos pantalones militares son una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanMilitares1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón militar WPM2',
            'precio' => 78000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 7,
            'descripcion' => 'Destaca con estos pantalones militares. Hechos de un tejido resistente y con múltiples bolsillos, estos pantalones son tan prácticos como duraderos. Su diseño táctico es perfecto para actividades al aire libre o para un look casual. Ya sea para acampar, senderismo o simplemente para el día a día, estos pantalones militares son una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanMilitares2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón militar WPM3',
            'precio' => 78000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 8,
            'descripcion' => 'Destaca con estos pantalones militares. Hechos de un tejido resistente y con múltiples bolsillos, estos pantalones son tan prácticos como duraderos. Su diseño táctico es perfecto para actividades al aire libre o para un look casual. Ya sea para acampar, senderismo o simplemente para el día a día, estos pantalones militares son una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanMilitares3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Pantalón militar WPM4',
            'precio' => 78000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 4,
            'id_talla' => 6,
            'descripcion' => 'Destaca con estos pantalones militares. Hechos de un tejido resistente y con múltiples bolsillos, estos pantalones son tan prácticos como duraderos. Su diseño táctico es perfecto para actividades al aire libre o para un look casual. Ya sea para acampar, senderismo o simplemente para el día a día, estos pantalones militares son una elección audaz y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanMilitares4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Short azul WSA1 ',
            'precio' => 33200,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 10,
            'id_talla' => 7,
            'descripcion' => 'Estos shorts para mujer son la elección perfecta para un día caluroso. Hechos de un tejido ligero y transpirable, estos shorts te mantendrán fresca y cómoda todo el día. Su diseño casual es perfecto para una salida a la playa o para un día de actividades al aire libre.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Pantalones/WomanShortsAzul1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis NIKE WTN1',
            'precio' => 33200,
            'id_marca' => 2,
            'id_color' => 8,
            'id_categoria' => 2,
            'id_sub_categoria' => 6,
            'id_talla' => 16,
            'descripcion' => 'Experimenta la calidad y el estilo con estos zapatos Nike para mujer. Diseñados con la última tecnología, estos zapatos te ofrecen el soporte que necesitas para cualquier actividad, ya sea correr, entrenar o para el uso diario. Su diseño moderno y elegante, disponible en una variedad de colores y estilos, asegura que encontrarás el par perfecto para complementar tu guardarropa. ',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Zapatos/WomenNike1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis NIKE WTN2',
            'precio' => 33200,
            'id_marca' => 2,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 6,
            'id_talla' => 14,
            'descripcion' => 'Experimenta la calidad y el estilo con estos zapatos Nike para mujer. Diseñados con la última tecnología, estos zapatos te ofrecen el soporte que necesitas para cualquier actividad, ya sea correr, entrenar o para el uso diario. Su diseño moderno y elegante, disponible en una variedad de colores y estilos, asegura que encontrarás el par perfecto para complementar tu guardarropa. ',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Zapatos/WomenNike2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido rojo WVR1',
            'precio' => 123500,
            'id_marca' => 1,
            'id_color' => 13,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 8,
            'descripcion' => 'Este vestido rojo es la personificación de la elegancia y el estilo. Hecho de un tejido de alta calidad, este vestido es tan cómodo como atractivo. Su vibrante tono rojo es perfecto para hacer una declaración de estilo audaz. Ya sea para una noche de fiesta o para una salida casual, este vestido rojo es una elección segura para destacar.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoRojo1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido rojo WVR2',
            'precio' => 123500,
            'id_marca' => 1,
            'id_color' => 13,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 7,
            'descripcion' => 'Este vestido rojo es la personificación de la elegancia y el estilo. Hecho de un tejido de alta calidad, este vestido es tan cómodo como atractivo. Su vibrante tono rojo es perfecto para hacer una declaración de estilo audaz. Ya sea para una noche de fiesta o para una salida casual, este vestido rojo es una elección segura para destacar.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoRojo2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido rojo WVR3',
            'precio' => 123500,
            'id_marca' => 1,
            'id_color' => 13,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 7,
            'descripcion' => 'Este vestido rojo es la personificación de la elegancia y el estilo. Hecho de un tejido de alta calidad, este vestido es tan cómodo como atractivo. Su vibrante tono rojo es perfecto para hacer una declaración de estilo audaz. Ya sea para una noche de fiesta o para una salida casual, este vestido rojo es una elección segura para destacar.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoRojo3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido rojo WVR4',
            'precio' => 123500,
            'id_marca' => 1,
            'id_color' => 13,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 8,
            'descripcion' => 'Este vestido rojo es la personificación de la elegancia y el estilo. Hecho de un tejido de alta calidad, este vestido es tan cómodo como atractivo. Su vibrante tono rojo es perfecto para hacer una declaración de estilo audaz. Ya sea para una noche de fiesta o para una salida casual, este vestido rojo es una elección segura para destacar.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoRojo4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido rojo-amarillo WVR4',
            'precio' => 123500,
            'id_marca' => 1,
            'id_color' => 13,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 8,
            'descripcion' => 'Este vestido rojo con detalles amarillos es una elección audaz y atractiva. Hecho de un tejido de alta calidad, este vestido combina comodidad y durabilidad. El contraste entre el rojo vibrante y el amarillo brillante añade un toque de originalidad a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, este vestido es una elección segura para destacar.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoRojo5_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido rosado WVR6',
            'precio' => 123500,
            'id_marca' => 1,
            'id_color' => 12,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 7,
            'descripcion' => 'Irradia feminidad con este vestido rosado. Confeccionado en un suave tejido, este vestido ofrece tanto estilo como comodidad. Su encantador tono rosado complementa cualquier tono de piel y añade un toque de dulzura a cualquier atuendo. Ya sea para una salida casual o una ocasión especial, este vestido rosado es una elección encantadora que realzará tu guardarropa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoRojo6_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido dorado WVD1',
            'precio' => 256000,
            'id_marca' => 1,
            'id_color' => 11,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 7,
            'descripcion' => 'Irradia elegancia con este vestido dorado. Confeccionado con un tejido de alta calidad que captura la luz, este vestido es tan deslumbrante como cómodo. Su tono dorado añade un toque de lujo a cualquier atuendo, perfecto para una noche de fiesta o una ocasión especial. Este vestido dorado es una elección segura para destacar y dejar una impresión duradera.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoDorado1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido dorado WVD2',
            'precio' => 256000,
            'id_marca' => 1,
            'id_color' => 11,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 8,
            'descripcion' => 'Irradia elegancia con este vestido dorado. Confeccionado con un tejido de alta calidad que captura la luz, este vestido es tan deslumbrante como cómodo. Su tono dorado añade un toque de lujo a cualquier atuendo, perfecto para una noche de fiesta o una ocasión especial. Este vestido dorado es una elección segura para destacar y dejar una impresión duradera.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoDorado2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido dorado WVD3',
            'precio' => 256000,
            'id_marca' => 1,
            'id_color' => 11,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 6,
            'descripcion' => 'Irradia elegancia con este vestido dorado. Confeccionado con un tejido de alta calidad que captura la luz, este vestido es tan deslumbrante como cómodo. Su tono dorado añade un toque de lujo a cualquier atuendo, perfecto para una noche de fiesta o una ocasión especial. Este vestido dorado es una elección segura para destacar y dejar una impresión duradera.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoDorado3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Conjunto de vestidos MIX WCM1',
            'precio' => 560000,
            'id_marca' => 1,
            'id_color' => 12,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 7,
            'descripcion' => 'Este conjunto de vestido elegante es la personificación de la sofisticación y el estilo. Hecho de un tejido de alta calidad, este vestido es tan cómodo como atractivo. Su diseño atemporal y los detalles finos añaden un toque de lujo a cualquier atuendo, perfecto para una noche de fiesta o una ocasión especial.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoCrema1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Conjunto de vestidos MIX WCM2',
            'precio' => 560000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 8,
            'descripcion' => 'Este conjunto de vestido elegante es la personificación de la sofisticación y el estilo. Hecho de un tejido de alta calidad, este vestido es tan cómodo como atractivo. Su diseño atemporal y los detalles finos añaden un toque de lujo a cualquier atuendo, perfecto para una noche de fiesta o una ocasión especial.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoCrema2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Conjunto de vestidos MIX WCM3',
            'precio' => 560000,
            'id_marca' => 1,
            'id_color' => 4,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 8,
            'descripcion' => 'Este conjunto de vestido elegante es la personificación de la sofisticación y el estilo. Hecho de un tejido de alta calidad, este vestido es tan cómodo como atractivo. Su diseño atemporal y los detalles finos añaden un toque de lujo a cualquier atuendo, perfecto para una noche de fiesta o una ocasión especial.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoCrema3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Conjunto de vestidos MIX WCM4',
            'precio' => 560000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 7,
            'descripcion' => 'Este conjunto de vestido elegante es la personificación de la sofisticación y el estilo. Hecho de un tejido de alta calidad, este vestido es tan cómodo como atractivo. Su diseño atemporal y los detalles finos añaden un toque de lujo a cualquier atuendo, perfecto para una noche de fiesta o una ocasión especial.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoCrema4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Conjunto de vestidos MIX WCM5',
            'precio' => 560000,
            'id_marca' => 1,
            'id_color' => 10,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 7,
            'descripcion' => 'Este conjunto de vestido elegante es la personificación de la sofisticación y el estilo. Hecho de un tejido de alta calidad, este vestido es tan cómodo como atractivo. Su diseño atemporal y los detalles finos añaden un toque de lujo a cualquier atuendo, perfecto para una noche de fiesta o una ocasión especial.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoCrema5_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido blanco WVB1',
            'precio' => 132000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 6,
            'descripcion' => '“Destaca con este vestido blanco. Hecho de un tejido de alta calidad, este vestido es tan cómodo como duradero. Su tono blanco puro es perfecto para añadir un toque de elegancia a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, este vestido blanco es una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoBlanco1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido blanco WVB2',
            'precio' => 132000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 8,
            'descripcion' => '“Destaca con este vestido blanco. Hecho de un tejido de alta calidad, este vestido es tan cómodo como duradero. Su tono blanco puro es perfecto para añadir un toque de elegancia a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, este vestido blanco es una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoBlanco2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido blanco WVB3',
            'precio' => 132000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 8,
            'descripcion' => '“Destaca con este vestido blanco. Hecho de un tejido de alta calidad, este vestido es tan cómodo como duradero. Su tono blanco puro es perfecto para añadir un toque de elegancia a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, este vestido blanco es una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoBlanco3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido blanco WVB4',
            'precio' => 132000,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 6,
            'descripcion' => '“Destaca con este vestido blanco. Hecho de un tejido de alta calidad, este vestido es tan cómodo como duradero. Su tono blanco puro es perfecto para añadir un toque de elegancia a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, este vestido blanco es una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoBlanco4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido azul WVA1',
            'precio' => 99000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 7,
            'descripcion' => 'Destaca con este vestido azul. Hecho de un tejido de alta calidad, este vestido es tan cómodo como duradero. Su tono azul profundo es perfecto para añadir un toque de elegancia a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, este vestido azul es una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoAzul1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido azul WVA2',
            'precio' => 99000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 6,
            'descripcion' => 'Destaca con este vestido azul. Hecho de un tejido de alta calidad, este vestido es tan cómodo como duradero. Su tono azul profundo es perfecto para añadir un toque de elegancia a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, este vestido azul es una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoAzul2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido azul WVA3',
            'precio' => 99000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 8,
            'descripcion' => 'Destaca con este vestido azul. Hecho de un tejido de alta calidad, este vestido es tan cómodo como duradero. Su tono azul profundo es perfecto para añadir un toque de elegancia a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, este vestido azul es una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoAzul3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido azul WVA4',
            'precio' => 99000,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 7,
            'descripcion' => 'Destaca con este vestido azul. Hecho de un tejido de alta calidad, este vestido es tan cómodo como duradero. Su tono azul profundo es perfecto para añadir un toque de elegancia a cualquier atuendo. Ya sea para una salida casual o para una ocasión especial, este vestido azul es una elección sofisticada y atractiva.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoAzul4_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido tradicional WVT1',
            'precio' => 350000,
            'id_marca' => 1,
            'id_color' => 13,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 6,
            'descripcion' => '“Este vestido cultural tradicional es una pieza imprescindible para los amantes de la moda con conciencia cultural. Confeccionado con técnicas tradicionales y adornado con detalles autóctonos, este vestido no es solo una prenda de vestir, sino una celebración de la rica historia y las tradiciones de su lugar de origen. Ya sea que se use en celebraciones especiales o como una declaración de estilo, este vestido es un testimonio del patrimonio cultural inigualable de su región. Añade este vestido cultural tradicional a tu colección y celebra la diversidad y la riqueza de las culturas del mundo',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoTradicional1_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido tradicional WVT2',
            'precio' => 350000,
            'id_marca' => 1,
            'id_color' => 12,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 7,
            'descripcion' => '“Este vestido cultural tradicional es una pieza imprescindible para los amantes de la moda con conciencia cultural. Confeccionado con técnicas tradicionales y adornado con detalles autóctonos, este vestido no es solo una prenda de vestir, sino una celebración de la rica historia y las tradiciones de su lugar de origen. Ya sea que se use en celebraciones especiales o como una declaración de estilo, este vestido es un testimonio del patrimonio cultural inigualable de su región. Añade este vestido cultural tradicional a tu colección y celebra la diversidad y la riqueza de las culturas del mundo',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoTradicional2_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido tradicional WVT3',
            'precio' => 350000,
            'id_marca' => 1,
            'id_color' => 9,
            'id_categoria' => 2,
            'id_sub_categoria' => 8,
            'id_talla' => 6,
            'descripcion' => '“Este vestido cultural tradicional es una pieza imprescindible para los amantes de la moda con conciencia cultural. Confeccionado con técnicas tradicionales y adornado con detalles autóctonos, este vestido no es solo una prenda de vestir, sino una celebración de la rica historia y las tradiciones de su lugar de origen. Ya sea que se use en celebraciones especiales o como una declaración de estilo, este vestido es un testimonio del patrimonio cultural inigualable de su región. Añade este vestido cultural tradicional a tu colección y celebra la diversidad y la riqueza de las culturas del mundo',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanVestidoTradicional3_11zon.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido de baño WVB1',
            'precio' => 65400,
            'id_marca' => 1,
            'id_color' => 12,
            'id_categoria' => 2,
            'id_sub_categoria' => 12,
            'id_talla' => 8,
            'descripcion' => 'Este vestido de playa para mujer es la elección perfecta para un día soleado en la playa. Hecho de un material ligero y transpirable, este vestido es tan cómodo como elegante. Su diseño suelto y fluido permite un movimiento fácil y libre, mientras que su vibrante color y estampado tropical añaden un toque de alegría a tu look de playa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanBa%C3%B1o1_11zo.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido de baño WVB2',
            'precio' => 65400,
            'id_marca' => 1,
            'id_color' => 12,
            'id_categoria' => 2,
            'id_sub_categoria' => 12,
            'id_talla' => 6,
            'descripcion' => 'Este vestido de playa para mujer es la elección perfecta para un día soleado en la playa. Hecho de un material ligero y transpirable, este vestido es tan cómodo como elegante. Su diseño suelto y fluido permite un movimiento fácil y libre, mientras que su vibrante color y estampado tropical añaden un toque de alegría a tu look de playa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanBa%C3%B1o2_11zo.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido de baño WVB3',
            'precio' => 65400,
            'id_marca' => 1,
            'id_color' => 6,
            'id_categoria' => 2,
            'id_sub_categoria' => 12,
            'id_talla' => 7,
            'descripcion' => 'Este vestido de playa para mujer es la elección perfecta para un día soleado en la playa. Hecho de un material ligero y transpirable, este vestido es tan cómodo como elegante. Su diseño suelto y fluido permite un movimiento fácil y libre, mientras que su vibrante color y estampado tropical añaden un toque de alegría a tu look de playa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanBa%C3%B1o3_11zo.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Vestido de baño WVB4',
            'precio' => 65400,
            'id_marca' => 1,
            'id_color' => 2,
            'id_categoria' => 2,
            'id_sub_categoria' => 12,
            'id_talla' => 6,
            'descripcion' => 'Este vestido de playa para mujer es la elección perfecta para un día soleado en la playa. Hecho de un material ligero y transpirable, este vestido es tan cómodo como elegante. Su diseño suelto y fluido permite un movimiento fácil y libre, mientras que su vibrante color y estampado tropical añaden un toque de alegría a tu look de playa.',
            'foto' => 'https://jamday-app-s3.s3.amazonaws.com/Mujer/Vestidos/WomanBa%C3%B1o4_11zo.webp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //     DB::table('productos')->insert([
        //         'nombre' => '',
        //         'precio' => 33200,
        //         'id_marca' => 1,
        //         'descripcion' => '',
        //         'foto' => '',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
    }
};
