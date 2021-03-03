<?php

use Illuminate\Database\Seeder;
use App\Artist;
class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists_list = config('seeder.artists');

        foreach ($artists_list as $artist) {
            

            $newArtist = new Artist();
            $newArtist->name = $artist['name'];
            $newArtist->lastname = $artist['lastname'];

            $newArtist->save();
        }
    }
}
