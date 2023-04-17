<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    use HasFactory;

 protected $fillable = [
        'name',
        'number_of_devices',
        'description',
    ];

    public function licence(){
      return  $this->hasMany(Licence::class);
    }

    public function order(){
        return $this->hasMany(Order::class);

    }

    

}
