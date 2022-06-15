<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday;

class Holidays_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i=0; $i < 20; $i++){
            $newHoliday = new Holiday();

            $newHoliday->title = $faker->company();
            $newHoliday->address = $faker->streetAddress();
            $newHoliday->city = $faker->city();
            $newHoliday->description = $faker->paragraph();
            $newHoliday->price = $faker->randomFloat(2, 20000, 500000);
            $newHoliday->image = $faker->imageUrl(360, 360, 'house', true);

            $newHoliday->save();
        }
        
    }
}
