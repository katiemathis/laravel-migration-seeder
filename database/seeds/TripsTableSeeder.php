<?php

use Illuminate\Database\Seeder;
use App\Trip;
//use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $trips = config('trips');

        foreach($trips as $trip) {

            $trip = new Trip();
            $trip->departure_city = $trip['departure_city'];
            $trip->arrival_city = $trip['arrival_city'];
            $trip->departure_date = $trip['departure_date'];
            $trip->return_date = $trip['return_date'];
            $trip->passenger_name = $trip['passenger_name'];
            $trip->passenger_last_name = $trip['passenger_last_name'];
            $trip->price = $trip['price'];
            $trip->save();

        }
    }
    /*{
        for($i=0;$i<10;$i++){
            $trip = new Trip();
            {
                $trips = config('trips');
        
                foreach($trips as $trip) {
        
                    $trip = new Trip();
                    $trip->departure_city = $trip->city();
                    $trip->arrival_city = $trip->city();
                    $trip->departure_date = $trip->date();
                    $trip->return_date = $trip->date();
                    $trip->passenger_name = $trip->name();
                    $trip->passenger_last_name = $trip->lastName();
                    $trip->price = $trip->randomDigit();
                    $trip->save();
        
                }
            }
            $trip->save();
        }
    }*/
   
}
