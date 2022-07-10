<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        return view('home/pages/index');
    }

    public function Shop()
    {
        return view('home/pages/products');
    }
    public function Cart()
    {
        return view('home/pages/cart');
    }
    public function Checkout()
    {
        return view('home/pages/checkout');
    }
    public function DetailProduct()
    {
        return view('home/pages/product-detail');
    }
    public function Contact()
    {
        return view('home/pages/contact');
    }
    public function Invoice()
    {
        return view('home/pages/invoice');
    }
}
