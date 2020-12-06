<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Icon;
use App\Models\Spec;

class Item extends Model
{
    public function cat()
    {
        return $this->belongsTo(Category::class,  'cat_id', 'id');
    }

    public function features()
    {
        return $this->hasMany(Feature::class, 'code', 'code');
    }
}
