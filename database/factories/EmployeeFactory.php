<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
	    'name' => $faker->name,
	    'role' => $faker->name,
	    'team_id' => $faker->biasedNumberBetween($min = 0, $max = 5, $function = 'sqrt'),
    ];
});
