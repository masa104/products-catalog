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
        $cats = Category::where('parent_id', 0)->get();
        return view('home', compact('cats'));
    }

    /**
     * Display a listing of the first or second level categories.
     *
     * @param  string  $lev1
     * @param  string|null  $lev2
     * @return \Illuminate\Http\Response
     */
    public function list($lev1,  $lev2 = null, $lev3 = null)
    {
        if ($lev3) {
            $item = Item::where('slug', $lev3)->firstOrFail();
            // dd($items);
            return view('detail', compact('item'));
        }
        if ($lev2) {
            $cat   = Category::where('slug', $lev2)->firstOrFail();
            // var_dump($cat);
            // dd($cat);
            $items = $cat->items;
            // dd($items);
            return view('items', compact('cat', 'items'));
        }

        $cat      = Category::where('slug', $lev1)->firstOrFail();
        $children = $cat->children;
        return view('cats', compact('cat', 'children'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
