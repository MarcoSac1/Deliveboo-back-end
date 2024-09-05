<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
    {
    public function run(): void
    {
        $userNames = [
            [
                'username' => 'giovanni',
                'email' => 'giovanni@example.com',
                'password' => 'gio2024!',
                'piva' => '12345678901',
                'adress' => 'Via Roma 10, 00100 Roma',
                'photo' => 'giovanni_photo.jpg',
            ],
            [
                'username' => 'sara',
                'email' => 'sara@example.com',
                'password' => 'sara4567#',
                'piva' => '23456789012',
                'adress' => 'Corso Milano 20, 20100 Milano',
                'photo' => 'sara_photo.jpg',
            ],
            [
                'username' => 'mario',
                'email' => 'mario@example.com',
                'password' => 'mario890!',
                'piva' => '34567890123',
                'adress' => 'Piazza Napoli 5, 80100 Napoli',
                'photo' => 'mario_photo.jpg',
            ],
            [
                'username' => 'laura',
                'email' => 'laura@example.com',
                'password' => 'lau1234@',
                'piva' => '45678901234',
                'adress' => 'Viale Torino 15, 10100 Torino',
                'photo' => 'laura_photo.jpg',
            ],
        ];


        foreach($userNames as $userData) {
            $user = new User();
            $user ->name = $userData['username'];
            $user ->email = $userData['email'];
            $user ->password = bcrypt($userData['password']);
            $user ->piva = $userData['piva'];
            $user ->adress = $userData['adress'];
            $user ->photo = $userData['photo'];
            $user->save();
        }
    }
}
