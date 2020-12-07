<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Category extends Model
{
  public function parent()
  {
    return $this->belongsTo(self::class, 'parent_id', 'id');
  }

  public function children()
  {
    return $this->hasMany(self::class, 'parent_id', 'id')/* ->with('children') */;
  }

  public function items()
  {
    return $this->hasMany(Item::class, 'cat_id', 'id');
  }
}
