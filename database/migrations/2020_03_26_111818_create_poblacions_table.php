<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoblacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poblacions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_provincia');
            $table->string('nombre');
            $table->string('nombre2i')->nullable();
            $table->string('coletilla')->nullable();
            $table->string('capital')->nullable();
            $table->integer('portes')->nullable();
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
        Schema::dropIfExists('poblacions');
    }
}
