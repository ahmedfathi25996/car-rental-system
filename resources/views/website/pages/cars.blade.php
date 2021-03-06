@extends('layouts.app')

@section('content')
<section class="model-area section-gap" id="cars" >
    <div class="container">
        <div class="row d-flex justify-content-center pb-40">
            <div class="col-md-8 pb-40 header-text">
                <h1 class="text-center pb-10">Choose your Desired Car Model</h1>
                <p class="text-center">
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>	
        
        
        <div class="active-model">
            @foreach($cars as $car)
            <div class="row align-items-center single-model item">
                <div class="col-lg-6 model-left">
                    <div class="title justify-content-between d-flex">
                    <h4 class="mt-20">{{$car->model}}</h4>
                    <h2>${{$car->price_per_day}}<span>/day</span></h2>
                    </div>
                    <p>
                    {{$car->descr}}, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p>
                        Capacity         : 04 Person <br>
                        Doors            : 04 <br>
                        Air Condition    : Dual Zone <br>
                        Transmission     : Automatic
                    </p>
                <a class="text-uppercase primary-btn" href="/spacificCar/{{$car->id}}">Book This Car Now</a>
                </div>
                <div class="col-lg-6 model-right">
                    <img class="img-fluid" src='{{ asset("images/$car->image") }}' alt="">
                </div>
            </div>
            
           
            @endforeach												
        </div>
       
        
               											
            </div>


           
            
</section>
<!-- End model Area -->			

<!-- Start callaction Area -->
<section class="callaction-area relative section-gap">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="text-white">Experience Great Support</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                </p>
                <a class="callaction-btn text-uppercase" href="#">Reach Our Support Team</a>	
            </div>
        </div>
    </div>	
</section>
<!-- End callaction Area -->

<!-- Start feature Area -->
<section class="feature-area section-gap" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>What Services we offer to our clients</h1>
                <p>
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4><span class="lnr lnr-license"></span>Professional Service</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>								
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4><span class="lnr lnr-phone"></span>Great Support</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>								
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>				
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>								
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
                    <p>
                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                    </p>									
                </div>
            </div>						
        </div>
    </div>	
</section>
<!-- End feature Area -->				

@endsection