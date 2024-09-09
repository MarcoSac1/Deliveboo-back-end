<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;
class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurantTypes =[
        [
            'id' => 0,
            'name' => 'Brunch Café'
        ],
        [
            'id' => 1,
            'name' => 'Gelateria'
        ],
        [
            'id' => 2,
            'name' => 'Pizzeria'
        ],
        [
            'id' => 3,
            'name' => 'Ristorante Francese'
        ],
        [
            'id' => 4,
            'name' => 'Ristorante Giapponese'
        ],
        [
            'id' => 5,
            'name' => 'Ristorante Greco'
        ],
        [
            'id' => 6,
            'name' => 'Ristorante Italiano'
        ],
        [
            'id' => 7,
            'name' => 'Ristorante Thai'
        ],
        [
            'id' => 8,
            'name' => 'Steakhouse'
        ],
        [
            'id' => 9,
            'name' => 'Sushi Bar'
        ],
    ];

        foreach($restaurantTypes as $restaurantType){
            $typology = new Typology();
            $typology ->id = $restaurantType['id'];
            $typology ->name = $restaurantType['name'];
            $typology ->save();
        }
    }
}
