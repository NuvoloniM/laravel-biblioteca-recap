<?php

use Illuminate\Database\Seeder;
use App\Models\Genre;
// importo faker
use Faker\Generator as Faker;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // array generi 
        $genres = [
            'Action',
            'Adventure',
            'Classic',
            'Comic Book',
            'Detective & Mystery',
            'Fantasy',
            'Horror',
            'Romance',
            'Sci-Fi',
            'Thrillers',
            'Biographies',
            'Essays',
        ];

        foreach ($genres as $genre){
            $tag = new Genre();
            $tag->label = $genre;
            // uso faker per generare random dei colori
            $tag->color = $faker->hexColor();
            $tag->save();
        }
    }
}
