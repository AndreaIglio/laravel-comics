<?php

use Illuminate\Database\Seeder;
use App\Novel;
use Faker\Generator as Faker;

class NovelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      
        $novels_list = config('seeder.novels');

        foreach ($novels_list as $novel) {
        
            $newNovel = new Novel();
            $newNovel->name = $novel['name'];
            $newNovel->body = $novel['body'];
            $newNovel->cover = $novel['cover'];
            $newNovel->price = $faker->randomFloat(2, 0, 100);
            $newNovel->available = $faker->boolean();
            $newNovel->volume = $faker->numberBetween(1,100);
            $newNovel->trim_size = $faker->word();
            $newNovel->pages = $faker->numberBetween(1,1000);
            $newNovel->rated = $faker->word();
            $newNovel->on_sale_date = $faker->date('Y_m_d');

            $newNovel->save();


        }

    }
}
