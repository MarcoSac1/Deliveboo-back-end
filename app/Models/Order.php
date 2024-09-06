<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order_Dish;
class Order extends Model
{
    // Relazione molti a uno con l'utente (user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relazione molti a molti con i piatti (dishes) tramite la tabella ponte order_dish
    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'order_dishes', 'dish_id', 'order_id');
    }
}
