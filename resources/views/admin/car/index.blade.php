@extends('admin.layouts.layout')
@section('title')
All Cars
@endsection
@section('header')

{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection


@section('content')
<section class="content-header">
        <h1>
          All Categories
         
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          
        </ol>
      </section>
<section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Hover Data Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#ID</th>
                    <th>Model</th>
                    <th>Price Per Day</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Date Of Create</th>
                  
                   
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($cars as $car)
                  <tr>
                    <td>{{$car->id}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->price_per_day}}</td>
                    <td>{{$car->descr}}</td>    
                    <td>{{$car->catego->name}}</td>               
                    <td>{{$car->created_at}}</td>
                   
                    
                  
                    
                   
                  <td>
                      <a href="/adminpanel/cars/{{$car->id}}/edit" class="btn btn-primary"> Edit </a>
                        
                        {!! Form::open(['action'=>['CarController@destroy',$car->id],'method'=>'POST','class'=>'pull-right' ]) !!}
                        {{ Form::hidden('_method','DELETE') }}
                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}    

                      {!! Form::close() !!}    
                       
                 </td>
                    
                  </tr>
                @endforeach
                </table>
              </div>
              <!-- /.box-body -->
            </div>
           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
@endsection

@section('footer')
{!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}

{!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
<script type="text/javascript">
    $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      })
</script>

@endsection