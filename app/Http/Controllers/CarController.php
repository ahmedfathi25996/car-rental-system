<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;
use App\Catego;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::all();
       return view('admin.car.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categos= Catego::all();
        return view('admin.car.add',compact('categos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       

        $this->validate($request,[
            //'model'=>'required',
            //'price_per_day'=>'required',
            //'descr'=>'required',
            //'categ'=>'required',
            //'image'=>'required',
           ]);
            //handel file upload
       if($request->hasFile('image')){
        $file = $request->file('image') ;
        
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/images/' ;
        $file->move($destinationPath,$fileName);
    }
    else{
       $fileName='noimage.jpg';
   }
        $catego= Catego::find($request->input('catego'));
           $car=new Car;
           $car->model=$request->input('model');
           $car->price_per_day=$request->input('price_per_day');
           $car->image=$fileName;
           $car->descr=$request->input('descr');
           
           $car->categ=$catego->id;
          
           $car->save();
           return redirect('/adminpanel/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car=Car::find($id);
        return view('admin.car.edit',compact('car'));
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
       
           
        $catego_id= Catego::find($request->input('catego'));
           $car=Car::find($id);
           $car->model=$request->input('model');
           $car->price_per_day=$request->input('price_per_day');
          
           $car->descr=$request->input('descr');
           
           $car->categ=$catego_id->id;
          
           $car->save();
           return redirect('/adminpanel/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car=Car::find($id);
        $car->delete();
        return redirect('/adminpanel/cars');
    }
}
