<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'name',
        'email',
        'phone',
        'adress',
        'date',
        'total_price',
        'state',
    ];

    public function user(){
        return $this->hasToMany(User::class);
    }
}
