<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    
    protected $table = 'movies';
    protected $guarded = ['id'];

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function actors(){
        return $this->belongsToMany(Actor::class)->using(Character::class);
    }

    public function users(){
        return $this->belongsToMany(User::class)->using(Watchlist::class);
    }

}
