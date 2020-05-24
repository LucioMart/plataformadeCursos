<?php

use Faker\Generator as Faker;

$factory->define(App\Categories::class, function (Faker $faker) {
    return [
        'name' => $faker->rendomElement(['PHP', 'JAVASCRIPT','JAVA','DISEÑO WEB','SEVIDORES','MYSQL','NOSQL','BIGDATA','AMAZON WEB SERVICES']),
        'description' => $faker->sentence
    ];
});
