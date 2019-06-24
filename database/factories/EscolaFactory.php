<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\escola;

$factory->define(escola::class, function (Faker $faker) {
    return [
        'logo' => 'img/logo.jpg' ,
        'website' => 'www.site.com' ,
        'nome' => $faker->unique()->name ,
        'cnpj' => $faker->unique()->randomNumber($nbDigits = 9) ,
        'logradouro' => $faker->streetAddress ,
        'cidade' => $faker->city ,
        'uf' => 'SP' ,
        'bairro' => $faker->name ,
        'numero' => $faker->randomDigit ,
        'telefone' => $faker->phoneNumber ,
        'email' => $faker->unique()->safeEmail,
        'responsavel' => $faker->name
    ];
});
