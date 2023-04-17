<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'adresse',
      'default_database',
      'login',
      'password',
      'port',
  ];
    public function order(){
        return  $this->hasMany(Order::class);
      }
}
