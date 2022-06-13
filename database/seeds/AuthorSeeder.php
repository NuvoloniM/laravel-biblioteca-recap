<?php

use Illuminate\Database\Seeder;
use App\Models\Author;
use Faker\Generator as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i= 0; $i < 5; $i++){
            $newAuthor = new Author();
            $newAuthor->name = $faker->firstName();
            $newAuthor->last_name = $faker->lastName();
            $newAuthor->life_story = $faker->paragraph(3);
            $newAuthor->author_year = $faker->year();
            $newAuthor->save();
        }
    }
}
