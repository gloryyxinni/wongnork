<x-admin-layout>
    <x-slot name="header">
        <h2 class="ml-2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurants') }}
        </h2>
    </x-slot>

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right" >
                <a class="btn btn-success mt-8 mr-8 mb-2.5" href="{{ route('restaurantForAdmin.create') }}"> Add New Rastaurant</a> 
            </div>
            <br>
        </div>
    </div>

<div class="container mx-auto">
<div class="flex flex-row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">Manage Restaurants</h5>
            </div>
            <div class="table-responsive">
                <table class="table content-center no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">ID</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">location</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">open-close time</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">picture</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">phonenumber</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Manage</th>
                    </tr>
                  </thead>
                  @foreach ($restaurants as $restaurant)
                  <tbody>
                    <tr>
                      <td class="pl-4">{{ $restaurant->id }}</td>
                      <td>
                          <h5 class="font-medium mb-0">{{ $restaurant->name }}</h5>
                      </td>
                      <td>
                          <span class="text-muted">{{ $restaurant->location }}</span><br>
                      </td>
                      <td>
                          <span class="text-muted">{{ $restaurant->open_close_time }}</span><br>
                      </td>
                      <td>
                          <span class="text-muted">{{ $restaurant->picture }}</span><br>
                      </td>
                      <td>
                        <span class="text-muted">{{ $restaurant->phonenumber }}</span><br>
                      </td>
                      <td>
                        <form action="{{ route('restaurants.destroy',$restaurant->id) }}" method="POST">

                            <a  href="{{ route('restaurants.show',$restaurant->id) }}" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-eye"></i> </a>
                            <a href="{{ route('restaurants.edit',$restaurant->id) }}" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </a>

                            {{-- <a class="btn btn-info"  href="{{ route('restaurants.show',$restaurant->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('restaurants.edit',$restaurant->id) }}">Edit</a>
            --}}
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button> 
                            {{-- <button type="submit" class="btn btn-danger">Delete</button>
                             --}}
                      </td>
                    </tr>
                  </tbody>
                  @endforeach 
                </table>
            </div>
        </div>
    </div>
</div>
</div>
    
    
     
    
    {!! $restaurants->links() !!}
   
      
@endsection
</x-admin-layout>
