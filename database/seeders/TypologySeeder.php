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
                'name' => 'Ristorante vegetariano',
                'timestamps' => now(),
            ],
            [
                'id' => 8,
                'name' => 'Tavola calda',
                'timestamps' => now(),
            ],
            [
                'id' => 9,
                'name' => 'Caffetteria',
                'timestamps' => now(),
            ],
            [
                'id' => 10,
                'name' => 'Bistrot',
                'timestamps' => now(),
            ],
            [
                'id' => 11,
                'name' => 'Ristorante Messicano',
                'timestamps' => now(),
            ],
            [
                'id' => 12,
                'name' => 'Ristorante Indiano',
                'timestamps' => now(),
            ],
            [
                'id' => 13,
                'name' => 'Ristorante Cinese',
                'timestamps' => now(),
            ],
            [
                'id' => 14,
                'name' => 'Ristorante Libanese',
                'timestamps' => now(),
            ],
            [
                'id' => 15,
                'name' => 'Pub',
                'timestamps' => now(),
            ],
            [
                'id' => 16,
                'name' => 'Enoteca',
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
