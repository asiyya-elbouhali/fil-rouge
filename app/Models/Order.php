<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function user (){

        return $this->belongsTo(User::class);
    }

    public function key (){

        return $this->hasMany(Key::class);
    }

    public function invoice(){
        return  $this->hasOne(Invoice::class,'order_id','id');
      }


      public function server(){
        return  $this->belongsTo(Server::class);
      }

      public function orderStatus(){
        return  $this->belongsTo(OrderStatus::class);
      }

      public function software(){
        return  $this->belongsTo(Software::class);
      }

      public function businessCategory(){
        return  $this->belongsTo(BusinessCategory::class);
      }





}
