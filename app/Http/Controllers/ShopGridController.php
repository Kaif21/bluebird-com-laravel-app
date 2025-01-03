<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use Illuminate\Http\Request;

class ShopGridController extends Controller
{
    public function index()
    {
        return view('website.home.index',[
            'products' => Product::where('status',1)->orderBy('id','desc')->take(8)->get(),
            'brands' =>Brand::where('status',1)->get(),
        ]);
    }
    public function product($id)
    {
        return view('website.product.index', ['product' => Product::find($id)]);
    }
    public function category($id)
    {
        return view('website.category.index', [
            'products' => Product::where('status', 1)
                ->where('category_id', $id)
                ->get()
        ]);
    }


    public function subCategory($id)
    {
        return view('website.category.index', [
            'products' => Product::where('status', 1)
                ->where('subcategory_id', $id)
                ->get()
        ]);
    }

    public function brand($id)
    {
        return view('website.brand.index',['products'=>Product::where('status',1)->where('brand_id',$id)->get(),
        'brands' =>Brand::where('status',1)->get()
    ]);
    }

    public function login()
    {
        return view('website.auth.login');
    }
    public function register()
    {
        return view('website.auth.register');
    }
}
