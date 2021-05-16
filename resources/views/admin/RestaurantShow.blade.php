<x-admin-layout>
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Restaurant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('restaurantForAdmin.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $restaurant->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                {{ $restaurant->location }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>open_close_time:</strong>
                {{ $restaurant->open_close_time }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>picture:</strong>
                {{ $restaurant->picture }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>phonenumber:</strong>
                {{ $restaurant->phonenumber }}
            </div>
        </div>
    </div>
@endsection
</x-admin-layout>