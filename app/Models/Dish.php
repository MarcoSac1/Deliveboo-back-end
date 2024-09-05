<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'name',
        'photo',
        'description',
        'price',
        'visible'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
