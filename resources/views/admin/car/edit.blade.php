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
                    {!! Form::open(['action' => ['CarController@update',$car->id],'method' => 'PATCH']) !!}
    <div class="form-group">
        {{Form::label('model', 'Model')}}
        {{Form::text('model', $car->model,['class' => 'form-control','placeholder'=>'Model'])}}
    </div>
    <div class="form-group">
        {{Form::label('price_per_day', 'Price_Per_Day')}}
        {{Form::text('price_per_day', $car->price_per_day ,['class' => 'form-control','placeholder'=>'Price'])}}
    </div>
    <div class="form-group">
            {{Form::label('descr', 'Description')}}
            {{Form::text('descr', $car->descr ,['class' => 'form-control','placeholder'=>'Description'])}}
        </div>
        
        <div class="form-group">
                {{Form::label('categ', 'Category')}}
                {!!Form::select('categ',['$car->categ->id'],$car->categ->name,['class'=>'form-control']) !!}
            </div>
          

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection