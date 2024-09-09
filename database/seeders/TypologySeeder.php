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
            'name' => 'Brunch Café'
        ],
        [
            'name' => 'Gelateria'
        ],
        [
            'name' => 'Pizzeria'
        ],
        [
            'name' => 'Ristorante Francese'
        ],
        [
            'name' => 'Ristorante Giapponese'
        ],
        [
            'name' => 'Ristorante Greco'
        ],
        [
            'name' => 'Ristorante Italiano'
        ],
        [
            'name' => 'Ristorante Thai'
        ],
        [
            'name' => 'Steakhouse'
        ],
        [
            'name' => 'Sushi Bar'
        ],
    ];

        foreach($restaurantTypes as $restaurantType){
            $typology = new Typology();
            $typology ->name = $restaurantType['name'];
            $typology ->save();
        }
    }
}
