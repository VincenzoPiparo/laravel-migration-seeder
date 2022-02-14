<?php

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <10; $i++){
            $new_holiday = new Holiday();
            $new_holiday->location = $faker->streetAddress(); 
            $new_holiday->price = $faker->randomNumber(3, false);
            $new_holiday->duration = $faker->randomNumber(2, false);
            $new_holiday->save();
        }
    }
}
