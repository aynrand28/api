<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function product(){
            return $this->belongTo(product::class);
    }
}
