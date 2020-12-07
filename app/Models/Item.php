<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Icon;
use App\Models\Spec;
use App\Models\ItemIcon;

class Item extends Model
{
    public $incrementing = false;

    public function cat()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function features()
    {
        return $this->hasMany(Feature::class, 'item_id', 'id');
    }

    public function specs()
    {
        return $this->hasMany(Spec::class, 'item_id', 'id');
    }

    public function icons()
    {
        return $this->belongsToMany(Icon::class)
            ->withPivot('priority')
            ->orderBy('priority', 'asc');
        // return $this->belongsToMany(
        //     self::class,
        //     'icon_item',
        //     'item_id',
        //     'icon_id'
        // )->using(ItemIcon::class);
    }

    public function getReleaseDateMonthDateAttribute()
    {
        return (new \DateTime($this->release_date))->format('m/j');
    }
}
