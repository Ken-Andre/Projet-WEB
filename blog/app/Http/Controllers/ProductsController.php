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
        $products= products::inRandomOrder()->take(9)->get();

        return view('shop',['products'=> $products]);
    }

    public function viewByCategory( $category){
            $products = products::where('category',$category)->get();

        return view('category',['products'=>$products]);
    }
}
