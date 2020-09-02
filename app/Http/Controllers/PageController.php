<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class PageController extends Controller
{
    public function mainfun($value='')
    {   
        $items=Item::all()->take(4);
    	return view('frontend.main',compact('items'));
    }

    public function loginfun($value='')
    {
    	return view('frontend.login');
    }
    
    public function registerfun($value='')
    {
    	return view('frontend.register');
    }

    public function brandfun($value='')
    {
        return view('frontend.brand');
    }

    public function itemdetailfun($value='')
    {
        return view('frontend.itemdetail');
    }

    public function promotionfun($value='')
    {
        return view('frontend.promotion');
    }

    public function shoppingcartfun($value='')
    {
        return view('frontend.shoppingcart');
    }

    public function subcategoryfun($value='')
    {
        return view('frontend.subcategory');
    }
}

