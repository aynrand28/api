<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
 
    //
    public function reviews(){
            return $this->hasMany(Review::class);
}
}