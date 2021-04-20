<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $promos = Promo::all();
        $products = Product::with(['photo', 'user', 'tags'])->paginate(6);
        $promoToDay = Promo::findOrFail(1)->products()->with(['photo', 'user', 'tags'])->first();
        $promotrends = Promo::findOrFail(7)->products()->with(['photo', 'user', 'tags'])->limit(3)->get();

        return view('layouts.home', compact('products', 'promos', 'promoToDay', 'promotrends'));
    }




    public function promo_selector($id)
    {
        $promos = Promo::all();
        $products = Promo::findOrFail($id)->products()->with(['photo', 'user', 'tags'])->paginate(10);
        $promoToDay = Promo::findOrFail(1)->products()->with(['photo', 'user', 'tags'])->first();
        $promotrends = Promo::findOrFail(7)->products()->limit(3)->with(['photo', 'user', 'tags'])->limit(3)->get();
        return view ('layouts.home',  compact('products', 'promos' , 'promoToDay', 'promotrends'));

    }






}
