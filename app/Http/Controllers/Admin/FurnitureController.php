<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Furniture $furniture)
    {
        $furniture = Furniture::orderBy('created_at','desc')->get();
        return view('admin.furniture.index',[
            'furniture' =>$furniture,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $furniture =Furniture::orderBy('created_at','DESC')->get();

        return view('admin.furniture.create',[
            'furniture'=>$furniture
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
        $furniture = new Furniture();
        $furniture->title=$request->title;
        $furniture->price=$request->price;
        $furniture->image= '/' .$request->image;
        $furniture->description=$request->description;
        $furniture->save();

        return redirect()->back()->withSuccess('Фурнитуры была успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function show(Furniture $furniture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function edit(Furniture $furniture)
    {
        $furniture =Furniture::orderBy('created_at','DESC')->get();

        return view('admin.furniture.edit',[
            'furniture'=>$furniture,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Furniture $furniture)
    {
        $furniture = new Furniture();
        $furniture->title=$request->title;
        $furniture->price=$request->price;
        $furniture->image=$request->image;
        $furniture->description=$request->description;
        $furniture->save();

        return redirect()->back()->withSuccess('Фурнитура Обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Furniture $furniture)
    {
        $furniture->delete();
        return redirect()->back()->withSuccess('Фурнитура была успешно Удалена');
    }
}
