<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData=$request->validate([
            'name'=>'required',
            'txt_after'=>'required|string|min:10',
            'txt_before'=>'required|string|min:10',
            'info'=>'required|string|min:10',
            'price'=>'required|numeric',
            'color'=>'required|string',
            'img' => 'required|mimes:png,jpg,jpeg',
            'day_p'=>'required|numeric',
            'show'=>'required|string',
            'categories'=>'required|array|min:1',
            'sound' => 'required|mimes:mp3,wav',
        ]);
        if ($request->show=='on'){
            $validData['show']=1;
        }else{
            $validData['show']=0;
        }


        $image=$request->file('img');
        $sound=$request->file('sound');
        $name_sound= 's'.time().'.'.$sound->getClientOriginalExtension();
        $name_img= 'i'.time().'.'.$image->getClientOriginalExtension();
        $validData['img']=$name_img;
        $validData['sound']=$name_sound;


        $image->move(public_path('/src/images'),$name_img);
        $sound->move(public_path('/src/sound'),$name_sound);



        $product= Product::create($validData);
        $product->categoreis()->sync($validData['categories']);
        return response()->json([
            'status'=>'suo',
            'ok'=>'ok'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
