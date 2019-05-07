<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => ucwords($faker->words(5, true)),
        'author' => $faker->firstName . ' ' . $faker->lastName,
        'date_publication' => $faker->dateTime($max = 'now')
    ];
});
