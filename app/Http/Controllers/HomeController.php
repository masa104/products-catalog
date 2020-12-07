<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class HomeController extends Controller
{
    /**
     * Display a listing of the root level categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats  = Category::where('parent_id', 0)->get();
        $items = Item::take(10)->orderBy('priority', 'asc')->get();
        return view('home', compact('cats', 'items'));
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
            $item = Item::where('slug', $lev3)->firstOrFail();
            return view('detail', compact('item'))
                ->with([
                    'meta_title' => $item->name,
                    'meta_desc'  => $item->desc,
                ]);
        }

        if ($lev2) {
            $cat   = Category::where('slug', $lev2)->firstOrFail();
            $items = $cat->items()->paginate(3);
            // return view('items', compact('cat'));
            return view('items', compact('cat', 'items'))
                ->with([
                    'meta_title' => $cat->name,
                    'meta_desc'  => $cat->desc,
                ]);
        }

        $cat = Category::where('slug', $lev1)->firstOrFail();
        return view('cats', compact('cat'))
            ->with([
                'meta_title' => $cat->name,
                'meta_desc'  => $cat->desc,
            ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $items   = Item::where('name', 'like', "%$keyword%")
            ->orWhere('desc', 'like', "%$keyword%")
            ->orWhere('id', 'like', "%$keyword%")
            ->paginate(9);
        $items->withPath('/search/?keyword=' . $request->keyword);
        return view('items', compact('items'));
    }
}
