<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use App\Models\Developer;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SingleTableInheritanceTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    // protected static $singleTableType = 'my_model_type'; //added By Asiyya
    protected $fillable = [
        'name',
        'email',
        'password',
        'type', // developer,admin and superAdmin

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     // Define the accessor method
    public function getUpdatedAtAttribute($value)
    {
        // Create a new Carbon instance from the timestamp
        $carbon = new Carbon($value);
        // Format the date in the desired format
        return $carbon->diffForHumans();
    }
    // public function getNameAttribute($name){
    //     return 'Mr '.$name;
    // }


  protected $table = "users";
  protected static $singleTableType ='user';
  protected static $singleTableTypeField = 'type';
  protected static $singleTableSubclasses = [Developer::class,TBDeveloper::class,Blocked::class];


  public function order()
  {
      return $this->hasMany(Order::class);
  }

}
