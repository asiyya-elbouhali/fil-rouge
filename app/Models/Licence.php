<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    use HasFactory;

    public function software(){
        return  $this->belongsTo(Software::class);
      }

      public function businessCategory(){
        return  $this->belongsTo(BusinessCategory::class);
      }

}
