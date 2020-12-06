<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function parent()
  {
    return $this->hasOne(self::class,  'id', 'parent');
  }

  public function children()
  {
    return $this->hasMany(self::class, 'parent', 'id')->with('children');
  }
}
