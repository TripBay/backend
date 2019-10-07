<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    $types = App\Type::pluck('id');
    return [
        'user_id' => function() {
            return App\User::first()->id ? : factory(App\User::class)->create()->id;
        },
        'type_id' => $faker->randomElement($types),
        'name' => $faker->catchPhrase,
        'location' => $faker->address,
        'dest_tag' => $faker->sentence,

    ];
});
