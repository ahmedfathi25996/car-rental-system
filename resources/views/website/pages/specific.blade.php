@extends('layouts.app')

@section('content')
<div class="col-lg-5  col-md-6 header-right ">
                                <h4 class="text-white pb-30">Book Your Car Today!</h4>
                               
                                <form class="form" role="form" autocomplete="off" method="POST" action="{{ url('/spacificCar') }}" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="car_id" value="{{$cars->id}}">
                                           <div class="default-select"  id="default-select"">
                                           
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 wrap-left">
                                                
                                                        <div class="input-group dates-wrap">                                              
                                                            <input class="form-control" id="exampleAmount" placeholder="Pickup Date" type="date" name="pickup_date">                        
                                                            				
                                                        </div>
                                                    
                                        </div>
                                        <div class="col-md-6 wrap-right">
                                            <div class="input-group dates-wrap">                                          
                                                <input  class="form-control" id="exampleAmount" placeholder="Dropout Date" type="date" name="dropout_date">                        
                                                											
                                            </div>
                                        </div>
                                    </div>
                                   							    
                                    <div class="from-group">
                                       <input class="form-control txt-field" type="text" name="pickup_location" placeholder="Location">
                                        <input class="form-control txt-field" type="text" name="full_name" placeholder="Your name">
                                        <input class="form-control txt-field" type="email" name="email" placeholder="Email address">
                                        <input class="form-control txt-field" type="text" name="phone_number" placeholder="Phone number">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirm Car Booking</button>
                                        </div>
                                    </div>
                                </form>
                               
                            </div>
<!-- <div class="col-lg-12  col-md-6 header-right">
<form class="form" role="form" autocomplete="off" method="POST" action="/spacificCar" enctype="multipart/form-data">
                                   
    <div class="form-group">
            {{ csrf_field() }}
           
    </div>
    <input type="hidden" name="car_id" value="{{$cars->id}}">
    <div class="from-group">
        <input class="form-control txt-field" type="text" name="pickup_location" placeholder="Location">
         
     </div>
    <div class="form-group row">
        <div class="col-md-6 wrap-left">
                
                        <div class="input-group dates-wrap">                                              
                            <input class="form-control" id="exampleAmount" placeholder="Pickup Date" type="date" name="pickup_date">                        
                                            
                        </div>
                    
        </div>
        <div class="col-md-6 wrap-right">
            <div class="input-group dates-wrap">                                          
                <input  class="form-control" id="exampleAmount" placeholder="Dropout Date" type="date" name="dropout_date">                        
                                                            
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-6 wrap-left">
                
                        <div class="input-group dates-wrap">                                              
                            <input class="form-control" id="exampleAmount" placeholder="Full Name" type="text" name="full_name">                        
                                            
                        </div>
                    
        </div>
        <div class="col-md-6 wrap-right">
            <div class="input-group dates-wrap">                                          
                <input  class="form-control" id="exampleAmount" placeholder="Email" type="email" name="email">                        
                                                            
            </div>
        </div>
    </div>
    <div class="from-group">
        <input class="form-control txt-field" type="text" name="phone_number" placeholder="Phone Number">
         
     </div>
   
                                   
    
    <div class="form-group row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirm Car Booking</button>
        </div>
    </div>
</form>
</div> -->
<section class="model-area section-gap" id="cars">
    <div class="container">
        <div class="row d-flex justify-content-center pb-40">
            <div class="col-md-8 pb-40 header-text">
                <h1 class="text-center pb-10">{{$cars->model}}</h1>
                <p class="text-center">
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>	
        
        
        
           
            <div class="row align-items-center single-model item">
                <div class="col-lg-6 model-left">
                    <div class="title justify-content-between d-flex">
                    <h4 class="mt-20">{{$cars->model}}</h4>
                    <h2>${{$cars->price_per_day}}<span>/day</span></h2>
                    </div>
                    <p>
                    {{$cars->descr}}, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p>
                        Capacity         : 04 Person <br>
                        Doors            : 04 <br>
                        Air Condition    : Dual Zone <br>
                        Transmission     : Automatic
                    </p>
               
                </div>
                <div class="col-lg-6 model-right">
                    <img class="img-fluid" src='{{ asset("images/$cars->image") }}' alt="">
                </div>
            </div>
            
           
            											
        
        
               											
            </div>


           
            
</section>
@endsection