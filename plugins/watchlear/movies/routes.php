<?php

use Watchlear\Movies\Models\Movie;
use Watchlear\Movies\Models\Actor;

Route::get('/actor-seed', function(){
   $faker = Faker\Factory::create();
    for ($i=0; $i <100 ; $i++) { 
       Actor::create([
      'name' => $faker->firstName,
      'lastname' => $faker->lastName

    ]);
    }
    return "Actors are created";
});