<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => str_slug($name),
    ];
});

$factory->define(App\Ad::class, function (Faker\Generator $faker) {
    $name = $faker->name;
    $user = App\User::orderBy(DB::raw('RAND()'))->first();
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'user_id' => $user->id,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 5000, $max = 100000),
        'description' => $faker->sentence(6),
    ];
});
