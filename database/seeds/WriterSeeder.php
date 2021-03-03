<?php

use Illuminate\Database\Seeder;
use App\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $writers_list = config('seeder.writers');

        foreach ($writers_list as $writer) {

            $newWriter = new Writer();
            $newWriter->name = $writer['name'];
            $newWriter->lastname = $writer['lastname'];

            $newWriter->save();
        }
    }
}
