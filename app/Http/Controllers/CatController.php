<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Furniture;

class CatController extends Controller
{
    
    // public function index()
    // {
    //     $posts =Posts::orderBy('created_at','desc')->get();
    //     return view('Cat',[
    //         'posts'=>$posts
    //         ]);
    // }
    public function ldsp()
    {
        $posts =Posts::orderBy('decor')->where('cat_id','1')->get();
        return view('Cat',[
            'posts'=>$posts,
            ]);
    }
    public function mdf()
    {
        $posts =Posts::orderBy('created_at','desc')->where('cat_id','2')->get();
        return view('Cat',[
            'posts'=>$posts,
            ]);
    }
    public function pvh()
    {
        $posts =Posts::orderBy('created_at','desc')->where('cat_id','3')->get();
        return view('Cat',[
            'posts'=>$posts,
            ]);
    }
    public function stol()
    {
        $posts =Posts::orderBy('created_at','desc')->where('cat_id','4')->get();
        return view('Cat',[
            'posts'=>$posts,
            ]);
    }
    public function fartuc()
    {
        $posts =Posts::orderBy('created_at','desc')->where('cat_id','5')->get();
        return view('Cat',[
            'posts'=>$posts,
            ]);
    }
    public function furniture()
    {
        $furniture =Furniture::orderBy('created_at','desc')->get();
        return view('Furniture',[
            'furniture'=>$furniture,
            ]);
    }
    public function sheksna()
    {
        $posts =Posts::orderBy('created_at','desc')->where('manufacturer','ШЕКСНА')->get();
        return view('Cat',[
            'posts'=>$posts,
            ]);
    }

}
