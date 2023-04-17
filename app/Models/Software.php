<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'version',
        'add_date',
        'compatibility',
        'developer',
        'image',
        'description',
        'url',
        'icon',
    ];



    public function licence(){
        return  $this->hasMany(Licence::class);
      }

      public function order(){
        return  $this->hasMany(Order::class);
      }

      public function getCreatedAtAttribute($value)
      {
          // Create a new Carbon instance from the timestamp
          $carbon = new Carbon($value);
          // Format the date in the desired format
          return $carbon->diffForHumans();
      }


}
