<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booksToSeed = 20;
        factory(App\Book::class, $booksToSeed)->create();
    }
}
