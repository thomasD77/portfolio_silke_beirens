<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\Prospect;
use App\Models\Reader;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::paginate(10);
        $readers = Reader::paginate(10);
        $prospects = Prospect::paginate(10);
        $posts = Post::paginate(10);
        $faqs = FAQ::paginate(10);
        return view('admin.includes.admin' , compact('users', 'readers', 'posts', 'prospects', 'faqs'));
    }
}
