<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function gateway(){
        return  $this->belongsTo(Gateway::class);
      }

      public function invoice(){
        return  $this->belongsTo(Invoice::class);
      }
}
