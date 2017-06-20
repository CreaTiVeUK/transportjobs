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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'JobStatus' => $faker->randomElement($array = array ('Pending','Accepted','Active','Completed')),
        'NoOfVehicles' => $faker->numberBetween($min = 0, $max = 1000),
        'DrivenPrice' => $faker->numberBetween($min = 0, $max = 99999),
        'TransportedPrice' => $faker->numberBetween($min = 0, $max = 9999),
        'CollectionDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'DeliveryDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'ServiceType' => $faker->randomElement($array = array ('Driven','Transported')),
        'RequestDate' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
