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

        $users[0]->typologies()->attach($typologies[8]);
        $users[2]->typologies()->attach($typologies[8]);
        $users[3]->typologies()->attach($typologies[8]);
        $users[1]->typologies()->attach($typologies[8]);
        $users[1]->typologies()->attach($typologies[8]);
        $users[1]->typologies()->attach($typologies[8]);
        // foreach($users as $userData) {
        //     $user = new User();
        //     $user->user_id = $userData['user_id'];
        //     $user->save();
        // }
        // foreach($typologies as $typologyData) {
        //     $typologies = new Typology();
        //     $typologies->typology_id = $typologyData['typology_id'];
        //     $typologies->save();
        // }
    }
}

