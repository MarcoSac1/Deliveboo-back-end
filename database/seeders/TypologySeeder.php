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
                'name' => 'Ristorante vegetariano'
            ],
            [
                'name' => 'Tavola calda'
            ],
            [
                'name' => 'Caffetteria'
            ],
            [
                'name' => 'Bistrot'
            ],
            [
                'name' => 'Ristorante Messicano'
            ],
            [
                'name' => 'Ristorante Indiano'
            ],
            [
                'name' => 'Ristorante Cinese'
            ],
            [
                'name' => 'Ristorante Libanese'
            ],
            [
                'name' => 'Pub'
            ],
            [
                'name' => 'Enoteca'
            ],
        ];

        foreach($restaurantTypes as $restaurantType){
            $typology = new Typology();
            $typology ->name = $restaurantType['name'];
            $typology ->save();
        }
    }
}
