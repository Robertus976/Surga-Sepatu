<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
{
    $banners = Banner::all();
    $products = Product::all();
    return view('home.index', compact('banners', 'products'));
}


    public function login_home()
    {
        $product = product::all();
        return view('home.index', compact('product'));
    }

    public function product_details($id)
    {
        $data = Product::find($id);
        return view('home.product_details', compact('data'));
    }
}
