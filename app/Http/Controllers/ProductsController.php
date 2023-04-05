<?php

namespace App\Http\Controllers;
use App\Models\Posts;

class ProductsController extends Controller
{
    public function index($id)
    {
        $posts =Posts::where('id',$id)->get();
        return view('products',[
            'posts'=>$posts]);
    }
}
