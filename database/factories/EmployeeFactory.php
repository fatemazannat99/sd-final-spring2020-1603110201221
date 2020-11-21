<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    $deptArray = \App\Department::pluck('id')->toArray();
    return [
        "name" => $faker->name($gender = 'male'|'female'),
        "email" => $faker->safeEmail,
        "address" =>$faker->address,
        "salary" =>$faker->numberBetween($min = 1000, $max = 9000),
        "status" =>$faker->randomElement($array = array (0, 1)),
        "department_id" =>$faker->randomElement($deptArray)
    ];
});
