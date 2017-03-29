<?php

use Carbon\Carbon;

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'tagline' => $faker->sentences($nb = rand(1,2), $asText = true),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Space::class, function (Faker\Generator $faker) {
   $users = App\User::all()->pluck('id')->toArray();
    return [
        'title' => $faker->streetName,
        'user_id' => $faker->randomElement($users),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Broadcast::class, function (Faker\Generator $faker) {
    return [
        'created_at' => Carbon::now()->addDays($faker->numberBetween(-10,-5))->addHours($faker->numberBetween(-12,12)),
    ];
});