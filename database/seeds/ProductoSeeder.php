<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
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
            DB::table('productos')->insert([
                'id' => $i,
                'referencia' => $faker->name(),
                'nombre' => $faker->name(),
                'precio' => random_int(100,200),
                'descuento' => random_int(0,100),
                'precio_proveedor' => random_int(100,200),
                'id_provincia' => random_int(1,5),
                'id_poblacion' => random_int(1,5),
                'id_categoria' => random_int(1,5),
                'descripcion' => $faker->name(),
                'id_img_1_p' => random_int(1,5),
                'id_img_1_m' => random_int(1,5),
                'id_img_1_g' => random_int(1,5),
                'id_img_2_p' => random_int(1,5),
                'id_img_2_m' => random_int(1,5),
                'id_img_2_g' => random_int(1,5),
                'id_img_3_p' => random_int(1,5),
                'id_img_3_m' => random_int(1,5),
                'id_img_3_g' => random_int(1,5),
                'destacado' => random_int(0,1),
                'destacado_orden' => random_int(0,1),
                'nuevo' => random_int(0,1),
                'blanco' => random_int(0,1),
                'rojo' => random_int(0,1),
                'rosa' => random_int(0,1),
                'variado' => random_int(0,1),
                'texto_seo' => $faker->text(10),
                'title' => $faker->text(10),
                'metatitle' => $faker->text(10),
                'metadesc' => $faker->text(10),
                'keywords' => $faker->text(10),
                'Tamano' => $faker->text(10),
                'peso' => $faker->text(10),

            ]);


    }
}
