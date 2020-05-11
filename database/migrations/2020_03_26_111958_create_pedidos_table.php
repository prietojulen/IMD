<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_pedido')->nullable();
            $table->string('fecha_pedido')->nullable();
            $table->string('hora_pedido')->nullable();
            $table->string('nombre_producto')->nullable();
            $table->string('codigo_producto')->nullable();
            $table->string('nombre_fallecido')->nullable();
            $table->string('nombre_provincia_tanatorio')->nullable();
            $table->string('nombre_poblacion_tanatorio')->nullable();
            $table->string('nombre_tanatorio_tanatorio')->nullable();
            $table->string('nombre_iglesia')->nullable();
            $table->string('nombre_provincia_iglesia')->nullable();
            $table->string('nombre_poblacion_iglesia')->nullable();
            $table->string('direccion_iglesia')->nullable();
            $table->string('hora_iglesia')->nullable();
            $table->string('a_atencion')->nullable();
            $table->string('nombre_provincia_otra')->nullable();
            $table->string('nombre_poblacion_otra')->nullable();
            $table->string('direccion_otra')->nullable();
            $table->string('telefono_contacto_otra')->nullable();
            $table->string('texto_cinta_dedicatoria')->nullable();
            $table->string('texto_tarjeta_condolencia')->nullable();
            $table->string('nombre_remitente')->nullable();
            $table->string('telefono_remitente')->nullable();
            $table->string('email_remitente')->nullable();
            $table->string('notificacion_entrega')->nullable();
            $table->string('nombre_empresa')->nullable();
            $table->string('cif')->nullable();
            $table->string('provincia_empresa')->nullable();
            $table->string('poblacion_empresa')->nullable();
            $table->string('direccion_empresa')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('email_empresa')->nullable();
            $table->string('telefono_empresa')->nullable();
            $table->longText('comentarios_notas')->nullable();
            $table->string('fecha_entrega')->nullable();
            $table->string('forma_pago')->nullable();
            $table->string('importe')->nullable();
            $table->string('canon')->nullable();
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
        Schema::dropIfExists('pedidos');
    }
}
