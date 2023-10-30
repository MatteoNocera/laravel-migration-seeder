<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        /* $trains = config('trains_data.trains'); */

        for ($i = 0; $i < 20; $i++) {

            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia', 'Trenord', 'Italo', 'TGV']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->date = $faker->date();
            $train->train_code = $faker->bothify('??-######');
            $train->number_of_coaches = $faker->numberBetween(3, 20);
            $train->is_delayed = $faker->boolean();
            $train->is_deleted = $faker->boolean();
            $train->save();
        }
    }
}
