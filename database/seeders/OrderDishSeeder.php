<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Order_Dish;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDishSeeder extends Seeder
{

    public function run(): void{
        // Ottieni tutte le istanze di Dish e Order
        $dishes = Dish::all();
        $orders = Order::all();

        // Assicurati che ci siano elementi nella collezione
        if ($dishes->isEmpty() || $orders->isEmpty()) {
            return;
        }

        // Genera dati di esempio
        $orderDishes = [
            [
                'dish_id' => $dishes[0]->id,
                'order_id' => $orders[0]->id,
                'quantity' => 3,
            ],
            [
                'dish_id' => $dishes[1]->id,
                'order_id' => $orders[3]->id,
                'quantity' => 1,
            ],
            [
                'dish_id' => $dishes[2]->id,
                'order_id' => $orders[3]->id,
                'quantity' => 2,
            ],
            [
                'dish_id' => $dishes[3]->id,
                'order_id' => $orders[4]->id,
                'quantity' => 5,
            ],
            [
                'dish_id' => $dishes[4]->id,
                'order_id' => $orders[4]->id,
                'quantity' => 2,
            ],
            [
                'dish_id' => $dishes[5]->id,
                'order_id' => $orders[5]->id,
                'quantity' => 6,
            ],
            [
                'dish_id' => $dishes[6]->id,
                'order_id' => $orders[6]->id,
                'quantity' => 9,
            ],
            [
                'dish_id' => $dishes[5]->id,
                'order_id' => $orders[5]->id,
                'quantity' => 3,
            ],
            [
                'dish_id' => $dishes[5]->id,
                'order_id' => $orders[5]->id,
                'quantity' => 2,
            ],
        ];
        // Inserisci i dati nel database
        foreach ($orderDishes as $orderDish) {
            Order_Dish::create($orderDish);
        }
    }


}
