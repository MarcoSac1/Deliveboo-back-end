<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restourant_Typology extends Model
{
    use HasFactory;
    protected $fillable =[
        'typology_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function typology(){
        return $this->belongsToMany(Typology::class);
    }
}
