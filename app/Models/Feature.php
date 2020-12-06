<?php

namespace App\Models;

use App\Models\Item;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function item()
    {
        return $this->belongsTo(Item::class, 'code', 'code');
    }
}
