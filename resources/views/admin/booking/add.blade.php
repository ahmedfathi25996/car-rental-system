@extends('admin.layouts.layout')
@section('title')
  Add New Booking
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<form class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/booking') }}" enctype="multipart/form-data">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Booking</div>
                <div class="panel-body">

                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('pickup_location') ? ' has-error' : '' }}">
                            <label for="pickup_location" class="col-md-4 control-label">Pickup Location</label>

                            <div class="col-md-6">
                                <input id="pickup_location" type="text" class="form-control" name="pickup_location" value="{{ old('pickup_location') }}">

                                @if ($errors->has('pickup_location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pickup_location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('pickup_date') ? ' has-error' : '' }}">
                                <label for="pickup_date" class="col-md-4 control-label">pickup_date</label>
    
                                <div class="col-md-6">
                                    <input id="pickup_date" type="date" class="form-control" name="pickup_date" value="{{ old('pickup_date') }}">
    
                                    @if ($errors->has('pickup_date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('pickup_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('dropout_date') ? ' has-error' : '' }}">
                                    <label for="dropout_date" class="col-md-4 control-label">dropout_date</label>
        
                                    <div class="col-md-6">
                                        <input id="dropout_date" type="date" class="form-control" name="dropout_date" value="{{ old('dropout_date') }}">
        
                                        @if ($errors->has('dropout_date'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('dropout_date') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                       
                            <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                                    <label for="full_name" class="col-md-4 control-label">full_name</label>
        
                                    <div class="col-md-6">
                                        <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}">
        
                                        @if ($errors->has('full_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('full_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('car_id') ? ' has-error' : '' }}">
                                        <label for="car_id" class="col-md-4 control-label">Model</label>
            
                                        <div class="col-md-6">
                                                <select name="car_id"  class="form-control input-sm">
                                                        @foreach($cars as $car)
                                                <option value="{{$car->id}}">{{ $car->model}}</option>
                                                       

                                                        @endforeach
                                                       </select>
                                            @if ($errors->has('car_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('car_id') }}</strong>
                                                </span>
                                            @endif
                                            
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">email</label>
                
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                                <label for="phone_number" class="col-md-4 control-label">phone_number</label>
                    
                                                <div class="col-md-6">
                                                    <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
                    
                                                    @if ($errors->has('phone_number'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                      

                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Add Booking
                                </button>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection