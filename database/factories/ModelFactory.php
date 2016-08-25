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

$factory->define(Projeto\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Projeto\Entities\Catalogacao::class, function (Faker\Generator $faker) {
    return [
        'nome_especie' => $faker->name,
        'nome_vernaculare' => $faker->name,
        'area_coleta_amostra' => $faker->name,
        'n_fixa_coleta' => $faker->name,
        'parte_coletata' => $faker->name,
        'n_tombamento' => $faker->name,
        'caract_botanica' => $faker->name,
        'caract_botanica' => $faker->name,
        'Infor_etnofarmacologica' => $faker->sentence,
        'Infor_etnobotanicas' => $faker->sentence,
        'user_id' => 1
    ];
});