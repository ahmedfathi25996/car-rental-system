<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Booking;
use App\Car;
use App\Http\Requests;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking=Booking::all();
    
        
        return view('admin.booking.index',compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars=Car::all();

        return view('admin.booking.add',compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->validate($request,[
            //''=>'required',
            //'price_per_day'=>'required',
            //'descr'=>'required',
            //'categ'=>'required',
            //'image'=>'required',
          // ]);
            
          $car= Car::find($request->input('car_id'));

          $user=Auth::user();
          
          $book=new Booking;
          $book->pickup_location=$request->input('pickup_location');
          $book->pickup_date=$request->input('pickup_date');
          $book->dropout_date=$request->input('dropout_date');
          $book->full_name=$request->input('full_name');
          $book->email=$request->input('email');
          $book->phone_number=$request->input('phone_number');
          
          
          $book->car_id=$car->id;
          $book->user_id=$user->id;

         
          $book->save();
         
          return redirect('/adminpanel');
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
        $book=Booking::find($id);
        return view('admin.booking.edit',compact('book'));
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
        $book=Booking::find($id);
        $book->pickup_location=$request->input('pickup_location');
        $book->pickup_date=$request->input('pickup_date');
        $book->dropout_date=$request->input('dropout_date');
        $book->full_name=$request->input('full_name');
        $book->email=$request->input('email');
        $book->phone_number=$request->input('phone_number');
        $book->save();
        return redirect('/adminpanel/booking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Booking::find($id);
        $book->delete();
        return back();
    }
}
