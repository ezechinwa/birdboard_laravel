<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use App\User;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    $project = [
        'title' => $faker->sentence,
        'description' => $faker->paragraph ,
       'owner_id' => factory(User::class)->create()->id
    // 'owner_id' => 2
    ];
    return $project;
});
