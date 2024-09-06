<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\Order_Dish;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dish = Dish::first();
        $order = Order::first();
        $orderDishes = [
            [
                'dish_id' => $dish->id,
                'order_id' => $order->id,
                'quantity' => 5,
            ],
            [
                'dish_id' => $dish->id,
                'order_id' => $order->id,
                'quantity' => 3,
            ],

            [
                'dish_id' => $dish->id,
                'order_id' => $order->id,
                'quantity' => 1,
            ],
            [
                'dish_id' => $dish->id,
                'order_id' => $order->id,
                'quantity' => 2,
            ],
            [
                'dish_id' => $dish->id,
                'order_id' => $order->id,
                'quantity' => 5,
            ],
            [
                'dish_id' => $dish->id,
                'order_id' => $order->id,
                'quantity' => 2,
            ],
            [
                'dish_id' => $dish->id,
                'order_id' => $order->id,
                'quantity' => 6,
            ],
            [
                'dish_id' => $dish->id,
                'order_id' => $order->id,
                'quantity' => 9,
            ],
            [
                'dish_id' => $dish->id,
                'order_id' => $order->id,
                'quantity' => 3,
            ],
            [
                'dish_id' => $dish->id,
                'order_id' => $order->id,
                'quantity' => 2,
            ],
        ];

        foreach($orderDishes as $orderDish) {
            Order_Dish::create($orderDish);
        }
    }
}
