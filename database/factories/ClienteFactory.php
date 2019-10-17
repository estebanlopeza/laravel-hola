<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cliente;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        //'company_id'	=> factory(\App\Company::class)->create(),
        'company_id'	=> Company::all()->random(),
        'name'			=> $faker->name,
        'email' 		=> $faker->unique()->safeEmail,
        'active'		=> array_rand( array_keys( (new Cliente)->activeOptions() ) ),

    ];
});
