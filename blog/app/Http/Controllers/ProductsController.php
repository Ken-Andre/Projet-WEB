<?php

namespace App\Http\Controllers;

use App\Models\products;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    //get access to the shop
    public function index(Request $request)
    {
        $query=products::query();

        $type=$request->type_filter;

        switch ($type)
        {
            case'1':
                $query->orderBy('created_at','DESC');
                break;
            case '2':
                $query->orderBy('quantity','DESC');
                break;
            case '3':
                $query->orderBy('price', 'ASC');
                break;
            case '4':
                $query->orderBy('price', 'DESC');
                break;
            default:
                 break;

        }

        $products=$query->paginate(9);
        return view('shop',['products' => $products]);
    }

    public function shop_single()
    {
        return view('products.shop_single');
    }


    public function viewByCategory($category, Request $request){

        $query=products::query()->where('category',$category);

        $type=$request->input('type_filter');


        switch ($type)
        {
            case'1':
                $query->orderBy('created_at','DESC');
                break;
            case '2':
                $query->orderBy('quantity','DESC');
                break;
            case '3':
                $query->orderBy('price', 'ASC');
                break;
            case '4':
                $query->orderBy('price', 'DESC');
                break;
            default:
                break;

        }

        $products = $query->paginate(9);

        return view('category',['products'=>$products, 'category'=>$category]);
    }



}
