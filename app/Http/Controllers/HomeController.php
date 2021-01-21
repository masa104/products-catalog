<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class HomeController extends Controller
{
    private const PAGE_COUNT = 12;
    /**
     * Display a listing of the root level categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats  = Category::rootCats()->get();
        $items = Item::newArrivals()->get();
        return view('home', compact('cats', 'items'))
            ->with([
                'meta_image' => asset('/images/ogp.jpg')
            ]);
    }

    /**
     * Display a listing of the first or second level categories.
     *
     * @param  string  $lev1
     * @param  string|null  $lev2
     * @param  string|null  $lev3
     * @return \Illuminate\Http\Response
     */
    public function list($lev1,  $lev2 = null, $lev3 = null)
    {
        if ($lev3) {
            $item = Item::bySlug($lev3)->firstOrFail();

            return view('detail', compact('item'))
                ->with([
                    'meta_title' => $item->name,
                    'meta_desc'  => $item->desc,
                    'meta_image' => asset("/images/items/{$item->slug}/hero.jpg")
                ]);
        }

        if ($lev2) {
            $cat   = Category::bySlug($lev2)->firstOrFail();
            $items = $cat->items()->paginate(self::PAGE_COUNT);

            return view('items', compact('cat', 'items'))
                ->with([
                    'meta_title' => $cat->name,
                    'meta_desc'  => $cat->desc,
                    'meta_image' => asset("/images/cats/{$cat->slug}/hero.jpg")
                ]);
        }

        $cat = Category::bySlug($lev1)->firstOrFail();
        return view('cats', compact('cat'))
            ->with([
                'meta_title' => $cat->name,
                'meta_desc'  => $cat->desc,
                'meta_image' => asset("/images/cats/{$cat->slug}/hero.jpg")
            ]);
    }

    public function search(Request $request)
    {
        $items = Item::searchResults($request->keyword)->paginate(self::PAGE_COUNT);

        $items->withPath("/search/?keyword={$request->keyword}");

        return view('items', compact('items'))
            ->with([
                'meta_title' => "Search results of \"{$request->keyword}\".",
                'meta_desc'  => "Search results of \"{$request->keyword}\".",
                'meta_image' => asset('/images/ogp.jpg')
            ]);
    }
}
