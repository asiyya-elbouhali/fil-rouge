<?php

namespace App\Models;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class TBDeveloper extends User
{

    use HasFactory,SingleTableInheritanceTrait;

  protected static $singleTableType = 'TBDeveloper';
  protected static $singleTableTypeField = 'type';

}
