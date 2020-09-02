<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function mainfun(){
        $items =Item::all()->take(6);
        return view('main()',compact('items'));
    }
    function promotionfun (){
        return view('promotion');
    }
    function loginfun (){
        return view('login');
    }
    function registerfun (){
        return view('register');
    }
    function shoppingcartfun (){
        return view('shoppingcart');
    }
    function subcategoryfun (){
        return view('subcategory');
    }

    function brandfun(){
        return view('brand');
    }

    function itemdetailfun(){
        return view('itemdetail');
    }
}
