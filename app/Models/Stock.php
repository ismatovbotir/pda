<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Stock extends Model
{
    use HasFactory;

    public function item(){
        return $this->belongsTo(Item::class);
    }

    
}
//eturn $this->hasOne(Phone::class, 'foreign_key', 'local_key');