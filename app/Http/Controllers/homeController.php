<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Banner;
use App\Models\Order;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('usertype','user')->get()->count();
        $product = Product::all()->count();
        $order = Order::all()->count();
        $mengantar = Order::where('status' , 'Diantar')->get()->count();
        return view('admin.index',compact('user', 'product', 'order','mengantar'));
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

    public function myorders()
    {
        $user =Auth::user()->id;

        $count = Cart::where('user_id', $user)->get()->count();
        
        $order = Order::where('user_id',$user)->get();

        return view('home.order',compact('count','order'));
    }
}
