<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    //get access to the shop
    public function index()
    {
        return view('shop');
    }

    public function shop_single()
    {
        return view('products.shop_single');
    }


    public function viewByCategory( $category){
            $products = products::where('category',$category)->get();

        return view('category',['products'=>$products]);
    }
}
