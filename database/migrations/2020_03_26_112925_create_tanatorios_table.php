<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanatorios', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->text('calle');
            $table->bigInteger('id_provincia');
            $table->bigInteger('id_poblacion');
            $table->integer('canon_corona');
            $table->integer('canon_centro');
            $table->integer('canon_ramo');
            $table->integer('tiene_floristeria');
            $table->text('email')->nullable();
            $table->integer('prioridad')->nullable();
            $table->integer('visible');
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
        Schema::dropIfExists('tanatorios');
    }
}
