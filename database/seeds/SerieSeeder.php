<?php

use Illuminate\Database\Seeder;
use App\Serie;
use Faker\Generator as Faker;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $series_list = config('seeder.series');


        foreach($series_list as $serie){

            $newSerie = new Serie();

            $newSerie->title = $serie['title'];
            $newSerie->year_release = $faker->date();
            $newSerie->cover = $serie['cover'];

            $newSerie->save();

        }

    }
}
