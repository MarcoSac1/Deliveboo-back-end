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
                'id' => 7,
                'name' => 'Ristorante vegetariano'
            ],
            [
                'id' => 8,
                'name' => 'Tavola calda'
            ],
            [
                'id' => 9,
                'name' => 'Caffetteria'
            ],
            [
                'id' => 10,
                'name' => 'Bistrot'
            ],
            [
                'id' => 11,
                'name' => 'Ristorante Messicano'
            ],
            [
                'id' => 12,
                'name' => 'Ristorante Indiano'
            ],
            [
                'id' => 13,
                'name' => 'Ristorante Cinese'
            ],
            [
                'id' => 14,
                'name' => 'Ristorante Libanese'
            ],
            [
                'id' => 15,
                'name' => 'Pub'
            ],
            [
                'id' => 16,
                'name' => 'Enoteca'
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
