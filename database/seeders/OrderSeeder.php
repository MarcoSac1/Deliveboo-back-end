<?php

namespace Database\Seeders;


use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $orders = [
            [
                "user_id"=> $user->id,
                "email"=> "mario.rossi@example.it",
                "phone"=> '3391234567',
                "adress"=> "Via Roma, 10, 00100 Roma RM",
                "date"=> "2024-09-05",
                "total_price"=> '50.75',
                "state"=> "pending"
            ],
            [
                "user_id"=> $user->id,
                "email"=> "giulia.bianchi@example.it",
                "phone"=> '3299876543',
                "adress"=> "Corso Vittorio Emanuele II, 25, 10100 Torino TO",
                "date"=> "2024-09-06",
                "total_price"=> '85.00',
                "state"=> "completed"
            ],
            [
                "user_id"=> $user->id,
                "email"=> "luca.verdi@example.it",
                "phone"=> '3475556666',
                "adress"=> "Via Garibaldi, 15, 20100 Milano MI",
                "date"=> "2024-09-07",
                "total_price"=> '40.25',
                "state"=> "cancelled"
            ],
            [
                "user_id"=> $user->id,
                "email"=> "alessandra.rossi@example.it",
                "phone"=> '3204445555',
                "adress"=> "Piazza del Duomo, 20, 50100 Firenze FI",
                "date"=> "2024-09-08",
                "total_price"=> '120.00',
                "state"=> "pending"
            ],
            [
                "user_id"=> $user->id,
                "email"=> "francesco.neri@example.it",
                "phone"=> '3288887777',
                "adress"=> "Via San Marco, 30, 30100 Venezia VE",
                "date"=> "2024-09-09",
                "total_price"=> '75.50',
                "state"=> "completed"
            ],
            [
                "user_id"=> $user->id,
                "email"=> "chiara.mancini@example.it",
                "phone"=> '3299998888',
                "adress"=> "Via Toledo, 5, 80100 Napoli NA",
                "date"=> "2024-09-10",
                "total_price"=> '65.00',
                "state"=> "pending"
            ],
            [
                "user_id"=> $user->id,
                "email"=> "giovanni.brunetti@example.it",
                "phone"=> '3396665555',
                "adress"=> "Viale dei Pini, 40, 90100 Palermo PA",
                "date"=> "2024-09-11",
                "total_price"=> '95.20',
                "state"=> "cancelled"
            ],
        ];
        foreach ($orders as $order){
            $newOrder = new Order();
            $newOrder->user_id= $order['user_id'];
            $newOrder->email = $order['email'];
            $newOrder->phone = $order['phone'];
            $newOrder->adress = $order['adress'];
            $newOrder->date = $order['date'];
            $newOrder->total_price = $order['total_price'];
            $newOrder->state = $order['state'];
            $newOrder->save();
        }
    }
}
