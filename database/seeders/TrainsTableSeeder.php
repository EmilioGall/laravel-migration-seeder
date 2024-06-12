<?php

namespace Database\Seeders;

use Faker;
use App\Models\Train;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {

            $faker = Faker\Factory::create('it_IT');

            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrive_station = $faker->city();
            $newTrain->departure_day = $faker->dateTimeThisMonth('+12 days');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrive_day = $faker->dateTimeThisMonth('+12 days');
            $newTrain->arrive_time = $faker->time();
            $newTrain->train_code = strtoupper($faker->randomLetter() . $faker->randomLetter()) . $faker->randomNumber(4, true);
            $newTrain->cars_number = $faker->numberBetween(2, 6);
            $newTrain->seats_number = $faker->numberBetween(50, 280);
            $newTrain->is_in_time = $faker->boolean();
            $newTrain->is_deleted = $faker->boolean();

            $newTrain->save();
        }
    }
}
