<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;
use App\Models\User;
class RestourantTypologySeeder extends Seeder
{
    /**Run the database seeds.*/
public function run(): void{
    $users = User::all();
    $typologies = Typology::all();
    $now = now();

    $users[0]->typologies()->attach($typologies[8]->id, ['created_at' => $now, 'updated_at' => $now]);
    $users[2]->typologies()->attach($typologies[8]->id, ['created_at' => $now, 'updated_at' => $now]);
    $users[3]->typologies()->attach($typologies[8]->id, ['created_at' => $now, 'updated_at' => $now]);
    $users[1]->typologies()->attach($typologies[8]->id, ['created_at' => $now, 'updated_at' => $now]);

    }
}

