<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('referencia');
            $table->string('nombre');
            $table->integer('precio');
            $table->integer('descuento');
            $table->integer('precio_proveedor');
            $table->bigInteger('id_provincia');
            $table->bigInteger('id_poblacion');
            $table->bigInteger('id_categoria');
            $table->text('descripcion');
            $table->bigInteger('id_img_1_p');
            $table->bigInteger('id_img_1_m');
            $table->bigInteger('id_img_1_g');
            $table->bigInteger('id_img_2_p');
            $table->bigInteger('id_img_2_m');
            $table->bigInteger('id_img_2_g');
            $table->bigInteger('id_img_3_p');
            $table->bigInteger('id_img_3_m');
            $table->bigInteger('id_img_3_g');
            $table->integer('destacado');
            $table->integer('destacado_orden');
            $table->integer('nuevo');
            $table->integer('blanco');
            $table->integer('rojo');
            $table->integer('rosa');
            $table->integer('variado');
            $table->text('texto_seo');
            $table->text('title');
            $table->text('metatitle');
            $table->text('metadesc');
            $table->text('keywords');
            $table->text('Tamano')->nullable();
            $table->text('peso')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
