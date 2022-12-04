<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Character extends Pivot
{
    use HasFactory;

    protected $table = 'characters';
    protected $guarded = ['id'];
    public $incrementing = true;

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    public function actor(){
        return $this->belongsTo(Actor::class);
    }


}
