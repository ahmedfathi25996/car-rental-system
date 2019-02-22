@extends('admin.layouts.layout')
@section('title')
  Add New Category
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<form class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/cars') }}" enctype="multipart/form-data">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Car</div>
                <div class="panel-body">

                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                            <label for="model" class="col-md-4 control-label">Model</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" value="{{ old('model') }}">

                                @if ($errors->has('model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price_per_day') ? ' has-error' : '' }}">
                                <label for="price_per_day" class="col-md-4 control-label">Price_Per_Day</label>
    
                                <div class="col-md-6">
                                    <input id="price_per_day" type="text" class="form-control" name="price_per_day" value="{{ old('price_per_day') }}">
    
                                    @if ($errors->has('price_per_day'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price_per_day') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('descr') ? ' has-error' : '' }}">
                                    <label for="descr" class="col-md-4 control-label">descr</label>
        
                                    <div class="col-md-6">
                                        <input id="descr" type="text" class="form-control" name="descr" value="{{ old('descr') }}">
        
                                        @if ($errors->has('descr'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('descr') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('categ') ? ' has-error' : '' }}">
                                        <label for="categ" class="col-md-4 control-label">Category</label>
            
                                        <div class="col-md-6">
                                                <select name="catego"  class="form-control input-sm">
                                                        @foreach($categos as $cat)
                                                <option value="{{$cat->id}}">{{ $cat->name}}</option>
                                                       

                                                        @endforeach
                                                       </select>
                                            @if ($errors->has('categ'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('categ') }}</strong>
                                                </span>
                                            @endif
                                            
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                            <label for="image" class="col-md-4 control-label">Car Image</label>
                
                                            <div class="col-md-6">
                                                    
                                                   {{Form::file('image')}}
                                                @if ($errors->has('image'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
            
                      

                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Add Car
                                </button>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection