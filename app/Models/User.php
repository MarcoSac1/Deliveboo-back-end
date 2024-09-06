<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Typology;
use App\Models\Order;
use App\Models\Dish;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'piva',
        'adress'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

5-creation-of-restourahttypologyseeder-array
    public function typologies()
    {
        return $this->belongsToMany(Typology::class, 'restourant_typologies', 'user_id', 'typology_id');
    }

    public function dishes(){
        return $this->hasMany(Dish::class, 'user_id');
    }

    public function orders(){
        return $this->HasMany(Order::class);
    }
}
