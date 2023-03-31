<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    use HasFactory;

    public function key_status(){
        return  $this->belongsTo(KeyStatus::class);
      }

      public function order(){
        return  $this->belongsTo(Order::class);
      }

}
