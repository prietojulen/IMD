<?php

use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
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
            DB::table('provincias')->insert([
                'id' => $i,
                'nombre' => $faker->country,

            ]);
    }
}
