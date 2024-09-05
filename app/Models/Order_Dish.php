<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Dish extends Model
{
    use HasFactory;
    protected $fillable =[
        'dish_id',
        'order_id',
        'quantity',
    ];

    public function dishes(){
        return $this->hasToMany(Dish::class);
    }

    public function orders(){
        return $this->hasToMany(Order::class);
    }
}
