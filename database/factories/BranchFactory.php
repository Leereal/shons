<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Branch;
use Faker\Generator as Faker;

$factory->define(Branch::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'address'=>$faker->address,
        'telephone'=>$faker->phoneNumber,
        'cellphone'=>$faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
    ];
});
