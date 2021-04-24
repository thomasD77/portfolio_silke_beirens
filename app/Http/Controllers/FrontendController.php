<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\ColorCart;
use App\Models\FAQ;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductColor;
use App\Models\Review;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    //Shop Page
    public function index(){
        $brands = Brand::all();
        $productcategories = ProductCategory::all();
        $products = Product::with(['brand', 'photo', 'user', 'productcategories'])->paginate(6);
        return view('frontend.shop', compact('brands', 'products', 'productcategories'));
    }


    public function productsPerBrand($id){
        $brands = Brand::all();
        $productcategories = ProductCategory::all();
        $products = Product::with(['photo', 'user', 'brand', 'tags', 'productcategories'])->where('brand_id', $id)->paginate(6);
        return view('frontend.shop', compact('brands', 'products', 'productcategories'));
    }

    public function productsPerCategory($id){
        $products = ProductCategory::findOrFail($id)->products()->with(['photo', 'user', 'tags', 'promos', 'brand', 'productcategories'])->paginate(10);
        $productcategories = ProductCategory::all();
        $brands = Brand::all();
        return view('frontend.shop', compact('brands', 'products', 'productcategories'));
    }




    public function productpage($id){
        $product = Product::findOrFail($id);
        $productcolor = ProductColor::where('id', 2)->get();
        $productcategories = ProductCategory::all();
        $reviews = $product->reviews()->whereIsActive(1)->with(['user'])->paginate(10);
        return view('frontend.productpage', compact('product', 'reviews', 'productcolor', 'productcategories'));
    }



    public function index_about(){
        return view('frontend.about');
    }

    public function index_blog(){
        $timeNow = Carbon::now()->toDateString();
        $posts = Post::with(['user', 'photo', 'postcategory'])->where('book', '<=', $timeNow)->latest()->paginate(6);
        return view('frontend.blog', compact('posts'));
    }

    public function index_post($slug){

        $post = Post::where('slug', $slug)->first();
        return view('frontend.post', compact('post'));
    }



    public function index_contact(){
        $FAQS = FAQ::all();
        return view('frontend.contact', compact('FAQS'));
    }

    public function addToCart($id){
        $product = Product::with(['productcategories', 'brand', 'photo','tags'])->where('id', '=', $id)->first();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);
        return redirect()->back();
    }


    public function cart(){

        if(!Session::has('cart')){
            return redirect('/');
        }else{
            $currentCart =Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($currentCart);
            $cart = $cart->products;
            return view('frontend.checkout', compact('cart'));
        }
    }

    public function updateQuantity(Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateQuantity($request->id, $request->quantity);
        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function addToList($id){

        $product = Product::with(['productcategories', 'brand', 'photo','tags'])->where('id', '=', $id)->first();
        $oldList = Session::has('list') ? Session::get('list') : null;
        $list = new Cart($oldList);
        $list->add($product, $id);
        Session::put('list', $list);
        return redirect()->back();
    }

    public function list(){

        if(!Session::has('list')){
            return redirect('/');
        }else{
            $currentList =Session::has('list') ? Session::get('list') : null;
            $list = new Cart($currentList);
            $list = $list->products;
            return view('frontend.wishlist', compact('list'));
        }
    }

    public function removeItemList($id){
        $oldList = Session::has('list') ? Session::get('list') : null;
        $list = new Wishlist($oldList);
        $list->removeItemList($id);
        Session::put('list', $list);
        return redirect()->back();
    }

    public function updatePrice(Request $request){

        $min_price = $request->min_price;
        $max_price = $request->max_price;

        $products = Product::whereBetween('price', [$min_price, $max_price])->
            with(['productcategories', 'brand', 'photo','user'])->orderBy('price', 'desc')->paginate(10);
        $brands = Brand::all();
        $productcategories = ProductCategory::all();
        return view('frontend.shop', compact('brands', 'productcategories', 'products'));
    }


}


