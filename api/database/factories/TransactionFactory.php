<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaction;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Transaction::class, function (Faker $faker) {
    $user = User::all()->first();

    $subcategoriesArray = [
        [1, 2, 3, 4],
        [5, 6, 7, 8, 9],
        [10, 11, 12, 13, 14, 15, 16, 17, 18],
    ];

    $category = rand(1, 3);
    $subcategoryIndex = array_rand($subcategoriesArray[$category-1]);

    return [
        'user_id' => $user->id,
        'transaction_category_id' => $category,
        'transaction_subcategory_id' => $subcategoriesArray[$category-1][$subcategoryIndex],
        'amount' => $faker->randomFloat(2, 5, 2000),
        'description' => $faker->text(50),
        'date' => $faker->dateTimeThisYear(),
    ];
});
