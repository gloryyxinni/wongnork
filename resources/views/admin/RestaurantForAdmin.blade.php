<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurant Details') }}
        </h2>
    </x-slot>

@section('content')
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
          
            <br>
            <div class="pull-right" >
                <a class="btn btn-success" href="{{ route('restaurantForAdmin.create') }}"> Add New Rastaurant</a> 
             </div>
             <br>
        
           
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        
    <table class="table table-dark">
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
</x-admin-layout>
