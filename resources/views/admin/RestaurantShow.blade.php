<x-admin-layout>
    <x-slot name="header">
        <h2 class="ml-2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Restaurant') }}
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
    
    <div class="container mx-auto w-full">
    <div class="flex flex-row">
    <div class="card w-full">
            <div class="card-body content-center">
                <strong class="card-title text-2xl leading-tight text-uppercase mb-0 ml-40">Restaurant #{{ $restaurant->id }}</strong>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 w-full">
            <div class="form-group">
                <h2 class="text-2xl ml-52">Name: {{ $restaurant->name }}</h2>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 w-full">
            <div class="form-group">
                <h2 class="text-2xl ml-52">Location: {{ $restaurant->location }}</h2>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 w-full">
            <div class="form-group">
                <h2 class="text-2xl ml-52">Open-Close Time: {{ $restaurant->open_close_time }}</h2>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 w-full">
            <div class="form-group">
                <h2 class="text-2xl ml-52">Picture: {{ $restaurant->picture }}</h2>
                <div class="ml-52"><img src="{{ $restaurant->picture }}"></div>
         
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 w-full">
            <div class="form-group">
                <h2 class="text-2xl ml-52">Phone Number: {{ $restaurant->phonenumber }}</h2>
                
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
</x-admin-layout>