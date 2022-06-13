<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Book;
use App\Models\Author;
// per poter utilizzare la funzione random 
use Illuminate\support\Arr;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // importo model autori e creo una variabile con essi 
        // essendo un array multidimensionale lo trasformo con toArray() in un array semplice
        $authors_id= Author::pluck('id')->toArray(); 

        for($i= 0; $i < 10; $i++){
            $newBook = new Book();
            $newBook->title = $faker->words(3, true);
            $newBook->author_id = Arr::random($authors_id);
            $newBook->image = $faker->imageUrl(640, 480 );
            $newBook->creation_year = $faker->year();
            $newBook->description = $faker->paragraph(2);
            $newBook->save();
        }
    }
}
