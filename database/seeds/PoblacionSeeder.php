<?php

use Illuminate\Database\Seeder;

class PoblacionSeeder extends Seeder
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
            DB::table('poblacions')->insert([
                'id' => $i,
                'id_provincia' => $i,
                'nombre' => $faker->country,
                'nombre2' => $faker->country,
                'coletilla' => $faker->country,
                'capital' => $faker->country,
                'portes' =>0,

            ]);
    }
}
