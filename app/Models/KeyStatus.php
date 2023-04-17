<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyStatus extends Model
{
    use HasFactory;

    protected $fillable =[

      'name',
      'value'
    ];
    public function key(){
        return  $this->hasMany(Key::class);
      }
}
