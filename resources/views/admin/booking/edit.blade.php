@extends('admin.layouts.layout')
@section('title')
  Edit Car Information
@endsection
@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update</div>
                    <div class="panel-body">
{!! Form::open(['action' => ['BookingController@update',$book->id],'method' => 'PATCH']) !!}
    <div class="form-group">
        {{Form::label('pickup_location', 'Pickup Location')}}
        {{Form::text('pickup_location', $book->pickup_location,['class' => 'form-control','placeholder'=>'Pickup Location'])}}
    </div>
    <div class="form-group">
        {{Form::label('pickup_date', 'Pickup Date')}}
        {{Form::date('pickup_date', $book->pickup_date ,['class' => 'form-control','placeholder'=>'Pickup Date'])}}
    </div>
    <div class="form-group">
            {{Form::label('dropout_date', 'Dropout Date')}}
            {{Form::date('dropout_date', $book->dropout_date ,['class' => 'form-control','placeholder'=>'Dropout Date'])}}
        </div>
    <div class="form-group">
            {{Form::label('full_name', 'Full Name')}}
            {{Form::text('full_name', $book->full_name ,['class' => 'form-control','placeholder'=>'Full Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('email', 'Email')}}
                {{Form::email('email', $book->email ,['class' => 'form-control','placeholder'=>'Email'])}}
            </div>
            <div class="form-group">
                    {{Form::label('phone_number', 'Phone Number')}}
                    {{Form::text('phone_number', $book->phone_number ,['class' => 'form-control','placeholder'=>'Phone Number'])}}
                </div>
        
       

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection