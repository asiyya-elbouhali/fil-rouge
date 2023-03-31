<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    public function licence(){
        return  $this->hasMany(Licence::class);
      }

      public function order(){
        return  $this->hasMany(Order::class);
      }
}
