<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('colores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('tallas', function (Blueprint $table) {
            $table->id();
            $table->string('tallas');
            $table->timestamps();
        });

        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('sub_categoria', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedDecimal('precio', 8, 2)->default(0);
            $table->foreignId('id_marca')->references('id')->on('marcas');
            $table->foreignId('id_talla')->references('id')->on('tallas');
            $table->foreignId('id_color')->references('id')->on('colores');
            $table->foreignId('id_categoria')->references('id')->on('categoria');
            $table->foreignId('id_sub_categoria')->references('id')->on('sub_categoria');
            $table->text('descripcion');
            $table->text('foto');
            $table->timestamps();
        });

        Schema::create('inventario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_producto')->references('id')->on('productos');
            $table->foreignId('id_talla')->references('id')->on('tallas');
            $table->integer('cantidad')->default(0);
            $table->timestamps();
        });

        Schema::create('carrito', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_producto')->references('id')->on('productos');
            $table->string('nombre');
            $table->foreignId('id_categoria')->references('id')->on('categoria');
            $table->decimal('precio', 10, 2);
            $table->foreignId('id_marca')->references('id')->on('marcas');
            $table->text('descripcion');
            $table->foreignId('id_sub_categoria')->references('id')->on('sub_categoria');
            $table->foreignId('id_color')->references('id')->on('colores');
            $table->integer('cantidad');
            $table->text('foto');
            $table->timestamps();
        });

        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->decimal('subtotal', 7, 2);
            $table->decimal('impuesto', 7, 2);
            $table->decimal('total', 7, 2);
            $table->timestamp('fechapedido');
            $table->enum('procedencia', ["web", "app", "físico"])->default("web");
            $table->enum('estado', ["nuevo", "proceso", "entregado"])->default("nuevo");
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->decimal('precio', 10, 2);
            $table->integer('cantidad');
            $table->decimal('importe', 10, 2);
            $table->foreignId('producto_id')->references('id')->on('productos');
            $table->foreignId('pedido_id')->references('id')->on('pedidos');
            $table->timestamps();
        });

        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('producto_id')->references('id')->on('productos');
            $table->timestamps();
            $table->integer('rating')->nullable();
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marcas');
        Schema::dropIfExists('productos');
        Schema::dropIfExists('colores');
        Schema::dropIfExists('tallas');
        Schema::dropIfExists('inventario');
        Schema::dropIfExists('categoria');
        Schema::dropIfExists('sub_categoria');
        Schema::dropIfExists('carrito');
        Schema::dropIfExists('pedido');
        Schema::dropIfExists('detalle');
        Schema::dropIfExists('ratings');
    }
};
