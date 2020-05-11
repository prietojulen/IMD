<?php

use Illuminate\Database\Seeder;

class AsignacionSeeder extends Seeder
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
            DB::table('asignacions')->insert([
                'id' => $i,
                'id_producto' => $i,
                'id_categoria' => $i,
                'orden_web' => random_int(0,5),
                'title' => $faker->text(10),
                'metatitle' => $faker->text(10),
                'metadesc' => $faker->text(10),
                'keywords' => $faker->text(10),

            ]);
    }
}
