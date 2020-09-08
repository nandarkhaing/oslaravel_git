<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;

class PageController extends Controller
{
    public function mainfun($value='')
    {   
        $items=Item::all();//->take(4)
        $brands=Brand::all();
         // $categories = Category::all();
    	return view('frontend.main',compact('items','brands'));
    }

    public function loginfun($value='')
    {
    	return view('frontend.login');
    }
    
    public function registerfun($value='')
    {
    	return view('frontend.register');
    }

    public function brandfun($id)
    {
        $brand=Brand::find($id);
        return view('frontend.brand',compact('brand'));
    }

    public function itemdetailfun($id)
    {
        $item=Item::find($id);
        return view('frontend.itemdetail',compact('item'));
    }

    public function promotionfun($id)
    {
        $item=Item::find($id);
        return view('frontend.promotion',compact('item'));
    }

    public function shoppingcartfun($value='')
    {
        return view('frontend.shoppingcart');
    }

    public function subcategoryfun($id)
    {
       // $subcategory = Subcategory::find($id);
       // $subcategory->setRelation('items', $subcategory->items()->paginate(3));
    return view('frontend.subcategory');
    }

    // public function itemsbycategoryfun($id)
    // {
    //     // $category = Category::find($id);
    //     // return view('frontend.itemsbycategory',compact('category'));
       
    // }
}

