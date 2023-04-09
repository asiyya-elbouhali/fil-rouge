<?php

namespace App\Models;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class Blocked extends User
{

    use HasFactory,SingleTableInheritanceTrait;

  protected static $singleTableType = 'Blocked';
  protected static $singleTableTypeField = 'type';

}
