@extends('layouts.admin')

@section('content')
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Restaurant Details</h2>
            </div>
            <div class="pull-right">
               <a class="btn btn-success" href="{{ route('restaurantForAdmin.create') }}"> Add New Rastaurant</a> 
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>name</th>
            <th>location</th>
            <th>open_close_time</th>
            <th>picture</th>
            <th>phonenumber</th>
            
            <th width="250px">Action</th>
        </tr>
        @foreach ($restaurants as $restaurant)
        <tr>
            
            <td>{{ $restaurant->name }}</td>
            <td>{{ $restaurant->location }}</td>
            <td>{{ $restaurant->open_close_time }}</td>
            <td>{{ $restaurant->picture }}</td>
            <td>{{ $restaurant->phonenumber }}</td>
            <td>
                <form action="{{ route('restaurants.destroy',$restaurant->id) }}" method="POST">

   
                    <a class="btn btn-info" href="{{ route('restaurants.show',$restaurant->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('restaurants.edit',$restaurant->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach 
    </table>
    
    {!! $restaurants->links() !!}
   
      
@endsection
@extends('layouts.admin')

@section('content')
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Restaurant Details</h2>
            </div>
            <div class="pull-right">
               <a class="btn btn-success" href="{{ route('restaurantForAdmin.create') }}"> Add New Rastaurant</a> 
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>name</th>
            <th>location</th>
            <th>open_close_time</th>
            <th>picture</th>
            <th>phonenumber</th>
            
            <th width="250px">Action</th>
        </tr>
        @foreach ($restaurants as $restaurant)
        <tr>
            
            <td>{{ $restaurant->name }}</td>
            <td>{{ $restaurant->location }}</td>
            <td>{{ $restaurant->open_close_time }}</td>
            <td>{{ $restaurant->picture }}</td>
            <td>{{ $restaurant->phonenumber }}</td>
            <td>
                <form action="{{ route('restaurants.destroy',$restaurant->id) }}" method="POST">

   
                    <a class="btn btn-info" href="{{ route('restaurants.show',$restaurant->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('restaurants.edit',$restaurant->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach 
    </table>
    
    {!! $restaurants->links() !!}
   
      
@endsection
