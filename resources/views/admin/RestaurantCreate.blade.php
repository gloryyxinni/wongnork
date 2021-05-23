<x-app-layout>
    <x-slot name="header">
        <h2 class="ml-2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Restaurant') }}
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
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('restaurantForAdmin.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>location:</strong>
                <textarea class="form-control" name="location" placeholder="location"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>open_close_time:</strong>
                <textarea class="form-control" name="open_close_time" placeholder="open_close_time"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
    
            <div class="form-group">
                <strong>picture:</strong>
                <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name="picture" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phonenumber:</strong>
                <textarea class="form-control" name="phonenumber" placeholder="phonenumber"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection
</x-app-layout>