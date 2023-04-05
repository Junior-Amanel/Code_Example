<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::orderBy('created_at','DESC')->get();
        return view('admin.post.index',[
            'posts'=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Category::orderBy('created_at','DESC')->get();

        return view('admin.post.create',[
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Posts();
        $post->decor=$request->decor;
        $post->cat_id=$request->cat_id;
        $post->length=$request->length;
        $post->width=$request->width;
        $post->thickness=$request->thickness;
        $post->manufacturer=$request->manufacturer;
        $post->price=$request->price;
        $post->availability=$request->availability;
        $post->image= '/' .$request->image;
        $post->description=$request->description;
        $post->coating=$request->coating;
        $post->save();
     
        
        return redirect()->back()->withSuccess('Товар Добавлен');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)
    {
        $categories =Category::orderBy('created_at','DESC')->get();

        return view('admin.post.edit',[
            'categories'=>$categories,
            'post'=>$post,
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $post)
    {
        
        $post->decor=$request->decor;
        $post->cat_id=$request->cat_id;
        $post->length=$request->length;
        $post->width=$request->width;
        $post->thickness=$request->thickness;
        $post->manufacturer=$request->manufacturer;
        $post->price=$request->price;
        $post->availability=$request->availability;
        $post->image=$request->image;
        $post->description=$request->description;
        $post->coating=$request->coating;
        $post->save();

        return redirect()->back()->withSuccess('Товар Обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $post)
    {
        //$category->delete();
        $post->delete();
        return redirect()->back()->withSuccess('Категория была успешно Удалена');
    }
}
