<x-admin-layout>
    <x-slot name="header">
        <h2 class="ml-2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Restaurant') }}
        </h2>
    </x-slot>

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mr-8" >
                <a class="btn btn-primary mt-12 ml-36 mb-2.5" href="{{ route('restaurantForAdmin.index') }}"> Back </a> 
            </div>
            <br>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="container mx-auto w-full">
    <div class="flex flex-row">
    <div class="card w-full">
            <div class="card-body content-center">
                <strong class="card-title text-2xl leading-tight text-uppercase mb-0 ml-40">Restaurant #{{ $restaurant->id }}</strong>
            </div>
    <form action="{{ route('restaurants.update',$restaurant->id)}}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h2 class="text-2xl ml-52">Name: </h2>
                    <input type="text" name="name" value="{{ $restaurant->name }}"class="form-control w-4/6 ml-52" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h2 class="text-2xl ml-52">location: </h2>
                    <input type="text" name="location" value="{{ $restaurant->location }}"class="form-control w-4/6 ml-52" placeholder="location">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h2 class="text-2xl ml-52">open_close_time: </h2>
                    <input type="text" name="open_close_time" value="{{ $restaurant->open_close_time }}"class="form-control w-4/6 ml-52" placeholder="open_close_time">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h2 class="text-2xl ml-52">picture: </h2>
                    <input type="text" name="picture" value="{{ $restaurant->picture }}"class="form-control w-4/6 ml-52" placeholder="picture">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h2 class="text-2xl ml-52">Phonenumber: </h2>
                    <input type="text" name="phonenumber" value="{{ $restaurant->phonenumber }}"class="form-control w-4/6 ml-52" placeholder="phonenumber">
            </div>   
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary mt-6 mb-2.5">Submit</button>
            </div>
        </div>
   
    </form>
    </div>
    </div>
    </div>
    
@endsection
</x-admin-layout>