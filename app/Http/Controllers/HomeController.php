<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
        $timeNow = Carbon::now()->toDateString();
        $posts = Post::with(['user', 'photo', 'postcategory'])->where('book', '<=', $timeNow)->latest()->limit(3)->get();
        $footer_posts = Post::with(['user', 'photo', 'postcategory'])->where('book', '<=', $timeNow)->latest()->limit(4)->get();
        return view('frontend.home', compact('posts', 'footer_posts'));
    }




    public function promo_selector($id)
    {
        $promos = Promo::all();
        $products = Promo::findOrFail($id)->products()->with(['photo', 'user', 'tags'])->paginate(10);
        $promoToDay = Promo::findOrFail(1)->products()->with(['photo', 'user', 'tags'])->first();
        $promotrends = Promo::findOrFail(7)->products()->limit(3)->with(['photo', 'user', 'tags'])->limit(3)->get();
        return view ('coming_soon',  compact('products', 'promos' , 'promoToDay', 'promotrends'));

    }






}
