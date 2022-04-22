<?php

use Illuminate\Database\Seeder;
use App\House;
use Faker\Generator as Faker;


class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       

        // popolare proprieta

        // $house->reference = 'ciao';
        // $house->addres = 'via di la 1';
        // $house->postal_code = 12045;
        // $house->state = 'veneto';
        // $house->city = 'verona';
        // $house->square_meters = 150;
        // $house->rooms = 5;
        // $house->bathrooms = 2;
        // $house->type = 'Appartamento';
        // $house->description = '';
        // $house->energy_rating = 'AA';
        // $house->price = 56000;
       
     for($i=0;$i<1000;$i++){
        $house = new House();
        // $house->save();
        $types = ['appartamento','villa','monolocale'];
        $rating = ['F','G','A','A+','AA','AAA'];

        $house->reference = $faker->bothify('????-####');
        $house->addres = $faker->streetAddress();
        $house->postal_code = $faker->postcode();
        $house->state = $faker->state();
        $house->city = $faker->city();
        $house->square_meters = $faker->numberBetween(30,400);
        $house->rooms = $faker->numberBetween(1,15);
        $house->bathrooms = $faker->numberBetween(1,5);
        $house->type = $faker->randomElement($types);
        $house->description = $faker->paragraphs($faker->numberBetween(1,2),true);
        $house->energy_rating = $faker->randomElement($rating);
        $house->price = $faker->randomFloat(2,20000,99999999);
       
     
        $house->save();
     }
    }
}
