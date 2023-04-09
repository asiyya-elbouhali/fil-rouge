<?php

namespace App\Models;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class Developer extends User
{

    use HasFactory,SingleTableInheritanceTrait;

  protected static $singleTableType = 'developer';
  protected static $singleTableTypeField = 'type';
  protected static $singleTableSubclasses = [Admin::class];

}
