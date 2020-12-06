<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CateogryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::where('parent', 0)->get();
        return view('home', compact('cats'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function category(Category $firstCat, Category $secondCat = null, $thirdCat = null)
    public function category($firstCat,  $secondCat)
    {
        if ($secondCat) {
            echo '$secondCat';
        } elseif ($firstCat) {
            echo '$firstCat';
        }
        // dd($firstCat);
        // $cat = Category::where('slug', $firstCat)->first();
        // $cats = $cat->children;
        // dd($cats);
        $cats = Category::all();
        return view('cats', compact('cats'));
    }
}
