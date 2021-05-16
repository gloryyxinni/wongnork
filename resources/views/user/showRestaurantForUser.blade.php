<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>
    <br>
@section('content')

<div class="row mb-3">
  @foreach ($restaurants as $restaurant)
  <div class="col-4 mt-3">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/image/12.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$restaurant->name}}</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$restaurant->location}}</li>
            <li class="list-group-item">{{$restaurant->open_close_time}}</li>
            <li class="list-group-item">{{$restaurant->phonenumber}}</li>
          </ul>
          <a href="#" class="btn btn-primary" >Reviews</a>
        </div>
      </div>
    </div> 
     
    


    @endforeach
    </div>
    
    @endsection
</x-app-layout>
