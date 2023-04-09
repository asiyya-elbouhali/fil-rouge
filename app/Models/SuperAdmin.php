<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class SuperAdmin extends Admin
{
 use HasFactory,SingleTableInheritanceTrait;

  protected static $singleTableType = 'superadmin';
  protected static $singleTableTypeField = 'type';
}
