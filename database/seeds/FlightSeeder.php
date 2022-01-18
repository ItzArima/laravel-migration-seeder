<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Model\Flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Model\Flight', 15)->create();
    }
    /* public function runn(Faker $faker){
        for($i=0; $i<15; $i++){
            $newFlight = new Flight();
            $now = date('Y-m-d');
            $date = 
            $newFlight->departure = $faker->city;
            $newFlight->destination = $faker->city;
            $newFlight->price = $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000);
            $newFlight->date = $faker->dateTimeBetween($now , '+2 years');
            $newFlight->time = $faker->time($format = 'H:i:s');
            $newFlight->save();    
        }
    } */
}
