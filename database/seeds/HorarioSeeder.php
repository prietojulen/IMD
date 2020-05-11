<?php

use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
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
            DB::table('horarios')->insert([
                'id' => $i,
                'dia_semana' =>random_int(0,6),
                'horario_salida' =>random_int(0,24),
                'minuto_salida' =>random_int(0,60),


            ]);
    }
}
