<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barcode;

class Item extends Model
{
    use HasFactory;

    public function barcodes(){
        return $this->hasMany(Barcode::class);
    }

    public function stocks(){
        return $this->hasMany(Stock::class);
    }
}
