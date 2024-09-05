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
