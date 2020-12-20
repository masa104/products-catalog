<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;
use App\Models\Icon;

class ItemIcon extends Pivot
{
    protected $table = 'icon_item';

    // public function role()
    // {
    //     return $this->belongsTo(Icon::class);
    // }
}
