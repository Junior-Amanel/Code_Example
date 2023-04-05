<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

        $posts_count =Posts::all()->count();

        return view('admin.home.index',[
    'posts_count' => $posts_count
    ]);

    }
}
