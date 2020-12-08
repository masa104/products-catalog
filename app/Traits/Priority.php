<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Priority
{
  public static function bootPriority()
  {
    static::addGlobalScope('order', function (Builder $builder) {
      $builder->orderBy('priority', 'asc');
    });
  }
}
