<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Dish;
use App\Models\Order;
use App\Models\Order_Dish;
use App\Models\Restourant_Typology;
use App\Models\Typology;

class DatabaseSeeder extends Seeder
    {
    public function run(): void
    {
        $userNames = [
            [
                'username' => 'giovanni',
                'email' => 'franco@eple.com',
                'password' => 'gio2024!',
                'piva' => '12345678901',
                'adress' => 'Via Roma 10, 00100 Roma',
                'photo' => 'giovanni_photo.jpg',
            ],
            [
                'username' => 'sara',
                'email' => 'sara@mple.com',
                'password' => 'sara4567#',
                'piva' => '23456789012',
                'adress' => 'Corso Milano 20, 20100 Milano',
                'photo' => 'sara_photo.jpg',
            ],
            [
                'username' => 'mario',
                'email' => 'mario@le.com',
                'password' => 'mario890!',
                'piva' => '34567890123',
                'adress' => 'Piazza Napoli 5, 80100 Napoli',
                'photo' => 'mario_photo.jpg',
            ],
            [
                'username' => 'laura',
                'email' => 'laura@fdfeexample.com',
                'password' => 'lau1234@',
                'piva' => '45678901234',
                'adress' => 'Viale Torino 15, 10100 Torino',
                'photo' => 'laura_photo.jpg',
            ],
        ];


        foreach($userNames as $userData) {
            $users = new User();
            $users ->name = $userData['username'];
            $users ->email = $userData['email'];
            $users ->password = bcrypt($userData['password']);
            $users ->piva = $userData['piva'];
            $users ->adress = $userData['adress'];
            $users ->photo = $userData['photo'];
            $users->save();
        }
         // Aggiungi qui la chiamata al seeder per i piatti
        $this->call([
            DishSeeder::class,
            OrderSeeder::class,
            TypologySeeder::class,
            RestourantTypologySeeder::class,
            TypologySeeder::class
            ]);
    }
}
