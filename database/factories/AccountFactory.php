<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return App\User::first()->id ? : factory(App\User::class)->create()->id;
        },
        'name' => $faker->catchPhrase,
        'location' => $faker->address,
        'dest_tag' => $faker->sentence,

    ];
});
