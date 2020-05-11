<?php

use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_ES');

        for($i = 1;$i < 20;$i++)
            DB::table('pedidos')->insert([
                'id' => $i,
                'numero_pedido' =>random_int(0,100),
                'fecha_pedido'=> $faker ->date,
                'hora_pedido' => $faker ->time($format = 'H:i:s', $max = 'now'),
                'nombre_producto' =>$faker ->name,
                'codigo_producto'=> $faker ->postcode,
                'nombre_fallecido' => $faker ->name,
                'nombre_provincia_tanatorio' =>$faker ->country,
                'nombre_poblacion_tanatorio' =>$faker ->country,
                'nombre_tanatorio_tanatorio' =>$faker ->name,
                'nombre_iglesia' =>$faker -> name,
                'nombre_provincia_iglesia' =>$faker -> name,
                'nombre_poblacion_iglesia' =>$faker -> name,
                'direccion_iglesia' =>$faker -> address,
                'hora_iglesia' => $faker ->time($format = 'H:i:s', $max = 'now'),
                'a_atencion'  =>$faker -> name,
                'nombre_provincia_otra' =>$faker -> name,
                'nombre_poblacion_otra' =>$faker -> name,
                'direccion_otra' =>$faker -> name,
                'telefono_contacto_otra' =>$faker -> phoneNumber,
                'texto_cinta_dedicatoria' =>$faker -> text,
                'texto_tarjeta_condolencia' =>$faker -> text,
                'nombre_remitente' =>$faker ->name,
                'telefono_remitente' =>$faker -> phoneNumber,
                'email_remitente' =>$faker -> email,
                'notificacion_entrega' =>$faker -> boolean,
                'nombre_empresa' =>$faker ->company,
                'cif' =>$faker ->numberBetween(1111,9999),
                'provincia_empresa' =>$faker ->country,
                'poblacion_empresa' =>$faker ->country,
                'direccion_empresa' =>$faker ->address,
                'codigo_postal'=> $faker ->postcode,
                'email_empresa' =>$faker -> email,
                'telefono_empresa' =>$faker -> phoneNumber,
                'comentarios_notas' =>$faker -> text,
                'fecha_entrega'=> $faker ->date,
                'forma_pago' =>$faker -> text,
                'importe' =>$faker -> numberBetween(50,200),
                'canon' =>$faker -> numberBetween(10,20),
                'portes' =>$faker -> numberBetween(5,50),






            ]);


    }
}
