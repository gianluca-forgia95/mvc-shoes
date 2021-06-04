<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $genres = ['male','female','other'];
        foreach($genres as $genre) {
            $newGenre = new Genre();
            $newGenre->name = $genre;
            $newGenre->save();
        }

    }
}
