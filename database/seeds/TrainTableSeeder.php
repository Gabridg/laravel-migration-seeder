<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 15; $i++){
            $new_train = new Train();

            $new_train-> agency = $faker->company();
            $new_train-> departures = $faker->city();
            $new_train-> arrives = $faker->city();
            $new_train-> departure_time = $faker->time();
            $new_train-> arrive_time = $faker->time();
            $new_train-> train_code = $faker->randomNumber(4, true);
            $new_train-> train_carriages = $faker->randomDigitNotNull();
            $new_train-> late = $faker->boolean();
            $new_train-> deleted = $faker->boolean();
            
            $new_train->save();
        }
    }
}
