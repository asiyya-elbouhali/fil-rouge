<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
      'order_date',
      'automatically_renew',
      'price',
      'number_of_device',
      'total_before_tax',
      'total_after_tax',
      'next_due_date',
      'web_hosting',
      'demon_version',
      'business_categories_id',
      'user_id',
      'software_id',
      'order_status_id',
      'server_id'
  ];

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
