<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Order_Dish;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDishSeeder extends Seeder
{
    public function run(): void
    {
        // Ottieni tutte le istanze di Dish e Order
        $dishes = Dish::all();
        $orders = Order::all();

        // Assicurati che ci siano elementi nella collezione
        if ($dishes->isEmpty() || $orders->isEmpty()) {
            return;
        }

        // Genera dati di esempio
        $orderDishes = [];

        foreach ($dishes as $dish) {
            foreach ($orders as $order) {
                $orderDishes[] = [
                    'dish_id' => $dish->id,
                    'order_id' => $order->id,
                    'quantity' => rand(1, 10),  // Puoi personalizzare la logica per generare la quantità
                ];
            }
        }

        // Inserisci i dati nel database
        foreach ($orderDishes as $orderDish) {
            Order_Dish::create($orderDish);
        }
    }
}

