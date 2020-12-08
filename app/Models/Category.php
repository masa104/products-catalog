<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Item;
use App\Traits\IsPublic;
use App\Traits\Priority;

class Category extends Model
{
  use IsPublic;
  use Priority;

  public function parent()
  {
    return $this->belongsTo(self::class, 'parent_id', 'id');
  }

  public function children()
  {
    return $this->hasMany(self::class, 'parent_id', 'id');
  }

  public function items()
  {
    return $this->hasMany(Item::class, 'cat_id', 'id');
  }

  /**
   * Local Scope of Root Cateteries
   *
   * @param  \Illuminate\Database\Eloquent\Builder  $query
   * @return \Illuminate\Database\Eloquent\Builder
   */
  public function scopeRootCats(Builder $query)
  {
    return $query->where('parent_id', 0);
  }

  /**
   * Find by slug
   *
   * @param  \Illuminate\Database\Eloquent\Builder  $query
   * @param string $slug
   * @return \Illuminate\Database\Eloquent\Builder
   */
  public function scopeBySlug(Builder $query, $slug)
  {
    return $query->where('slug', $slug);
  }
}
