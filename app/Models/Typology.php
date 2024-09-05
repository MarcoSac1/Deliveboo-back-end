<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    use HasFactory;

    protected $fillable =[
        'name'
    ];

    public function restourant_typology(){
        return $this->belongsToMany(Restourant_Typology::class);
    }
}
