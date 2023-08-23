<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $new_train = new Train();

        $new_train->agency_name = $faker->word();
        $new_train->from_station = $faker->words(2, true);
        $new_train->to_station = $faker->words(2, true);
        $new_train->departure_time = $faker->time();
        $new_train->arrival_time = $faker->time();
        $new_train->train_number = $faker->randomNumber(5, true);
        $new_train->number_of_cabs = $faker->randomDigit();
        $new_train->delay = $faker->boolean();
        $new_train->cancelled = $faker->boolean();

        $new_train->save();
    }
}
