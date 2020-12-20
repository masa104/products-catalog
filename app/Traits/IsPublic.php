<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait IsPublic
{
  public static function bootIsPublic()
  {
    static::addGlobalScope('order', function (Builder $builder) {
      $builder->where('is_public', true);
    });
  }
}
