<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;
use App\Models\User;
class RestourantTypologySeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $typologies = Typology::all();

<<<<<<< HEAD
        $now = now();

        $users[0]->typologies()->attach($typologies[8]->id, ['created_at' => $now, 'updated_at' => $now]);
        $users[2]->typologies()->attach($typologies[8]->id, ['created_at' => $now, 'updated_at' => $now]);
        $users[3]->typologies()->attach($typologies[8]->id, ['created_at' => $now, 'updated_at' => $now]);
        $users[1]->typologies()->attach($typologies[8]->id, ['created_at' => $now, 'updated_at' => $now]);
=======
        $users[0]->typologies()->attach($typologies[0]);
        $users[2]->typologies()->attach($typologies[1]);
        $users[3]->typologies()->attach($typologies[2]);
        $users[1]->typologies()->attach($typologies[3]);
        $users[1]->typologies()->attach($typologies[4]);
        $users[1]->typologies()->attach($typologies[5]);
>>>>>>> b44870e9fd30f69f4fd547b004672f388e6c342f
    }
}

