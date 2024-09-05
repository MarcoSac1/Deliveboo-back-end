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
        $restaurantTypes = [
            [
                'id' => 1,
                'name' => 'Pizzeria',
                'timestamps' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Trattoria',
                'timestamps' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Ristorante di pesce',
                'timestamps' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Steakhouse',
                'timestamps' => now(),

            ],
            [
                'id' => 5,
                'name' => 'Fast Food',
                'timestamps' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Sushi Bar',
                'timestamps' => now(),
            ],
        ];

        foreach($restaurantTypes as $restaurantType){
            $typology = new Typology();
            $typology ->id = $restaurantType['id'];
            $typology ->name = $restaurantType['name'];
            $typology ->timestamps= $restaurantType['timestamps'];
            $typology ->save();
        }
    }
}
