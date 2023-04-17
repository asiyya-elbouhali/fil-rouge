<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    use HasFactory;
    protected $fillable = [
      'initial_key',
      'activated_key',
      'device_number',
      'expiration_date',
      'auto_renewal',
      'order_id',
      'key_statuses_id',
  ];

    public function key_status(){
        return  $this->belongsTo(KeyStatus::class);
      }

      public function order(){
        return  $this->belongsTo(Order::class);
      }


      public function getExpirationDateAttribute($value)
      {
          // Create a new Carbon instance from the timestamp
          $carbon = new Carbon($value);
          // Format the date in the desired format
          return $carbon->diffForHumans();
      }


}
