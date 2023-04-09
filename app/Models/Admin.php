<?php

namespace App\Models;

use App\Models\Developer;
use App\Models\SuperAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class Admin extends Developer
{
  use HasFactory,SingleTableInheritanceTrait;

  protected static $singleTableType = 'admin'; // name in the column type of users table
  protected static $singleTableTypeField = 'type'; // the column name in the users table
  protected static $singleTableSubclasses = [SuperAdmin::class]; // subClass
}
