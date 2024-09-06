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
        $users[0]->typologies()->attach($typologies[0]);
        $users[2]->typologies()->attach($typologies[1]);
        $users[3]->typologies()->attach($typologies[2]);
        $users[1]->typologies()->attach($typologies[3]);
        $users[1]->typologies()->attach($typologies[4]);
        $users[1]->typologies()->attach($typologies[5]);
    }
}
