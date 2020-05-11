<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
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
            DB::table('categorias')->insert([
                'id' => $i,
                'nombre' => $faker->name(),
                'id_imagen' => 1,
                'texto_seo' => $faker->text(10),
                'title' => $faker->text(10),
                'metatitle' => $faker->text(10),
                'metadesc' => $faker->text(10),
                'keywords' => $faker->text(10),

            ]);

    }
}

