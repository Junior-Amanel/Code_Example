<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\News;
use App\Models\Category;
use App\Models\Furniture;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ldsp=Posts::orderBy('decor')->where('cat_id','1')->get();
        $mdf=Posts::orderBy('created_at','desc')->where('cat_id','2')->get();
        $pvh=Posts::orderBy('created_at','desc')->where('cat_id','3')->get();
        $stol=Posts::orderBy('created_at','desc')->where('cat_id','4')->get();
        $fartuc=Posts::orderBy('created_at','desc')->where('cat_id','5')->get();
        $furniture=Furniture::orderBy('created_at','desc')->get();
        $posts=Posts::orderBy('decor')->get();
        $categories =Category::orderBy('created_at','DESC')->get();
        $news=News::orderBy('created_at','desc')->take(3)->get();
        return view('index',[
            'categories'=>$categories,
            'posts'=>$posts,
            'ldsp'=>$ldsp,
            'mdf'=>$mdf,
            'pvh'=>$pvh,
            'stol'=>$stol,
            'fartuc'=>$fartuc,
            'furniture'=>$furniture,
            'news'=>$news,
            ]);
            $this->middleware('auth');
    }
}
