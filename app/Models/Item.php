<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Category;
use App\Models\Feature;
use App\Models\Icon;
use App\Models\Spec;
use App\Models\ItemIcon;

use App\Traits\Priority;
use App\Traits\IsPublic;


class Item extends Model
{
    use IsPublic;
    use Priority;

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
    }

    /**
     * Format release_date attribute to month/date
     *
     * @return string
     */
    public function getReleaseDateMonthDateAttribute()
    {
        return (new \DateTime($this->release_date))->format('m/j');
    }

    /**
     * Local Scope of New arrival items
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNewArrivals(Builder $query)
    {
        return $query->take(10)
            ->orderBy('release_date', 'desc')
            ->orderBy('priority', 'asc');
    }

    /**
     * Local Scope of search results for keyword
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param string $keyword
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearchResults(Builder $query, $keyword)
    {
        return $query->where('name', 'like', "%$keyword%")
            ->orWhere('desc', 'like', "%$keyword%")
            ->orWhere('id', 'like', "%$keyword%");
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
