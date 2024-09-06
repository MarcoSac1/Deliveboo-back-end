<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Dish extends Model
{
    use HasFactory;
    protected $table = 'order_dishes';
    // protected $fillable =[
    //     'dish_id',
    //     'order_id',
    //     'quantity',
    // ];

    public function dishes(){
        return $this->belongsToMany(Dish::class);
    }

    public function orders(){
        return $this->BelongsToMany(Order::class);
    }
}
