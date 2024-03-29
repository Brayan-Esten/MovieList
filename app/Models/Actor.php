<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;

    protected $table = 'actors';
    protected $guarded = ['id'];

    public function movies(){
        return $this->belongsToMany(Movie::class, 'characters')->using(Character::class);
    }
}
