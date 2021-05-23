<x-admin-layout>
    <x-slot name="header">
        <h2 class="ml-2 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

@section('content')
<div class="container mx-auto">
   <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="container mx-auto">
<div class="flex flex-row">
    <div class="col-md-12">
        <div class="card mt-12">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">Manage Users</h5>
            </div>
            <div class="table-responsive">
                <table class="table content-center no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">ID</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Password</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Manage</th>
                    </tr>
                  </thead>
                  @foreach ($users as $user)
                  <tbody>
                    <tr>
                      <td class="pl-4">{{ $user->id }}</td>
                      <td>
                          <h5 class="font-medium mb-0">{{ $user->name }}</h5>
                      </td>
                      <td>
                          <span class="text-muted">{{ $user->email }}</span><br>
                      </td>
                      <td>
                          <span class="text-muted">{{ $user->password }}</span><br>
                      </td>
                      <td>
                        <form action="{{ route('userForAdmin.destroy',$user->id) }}" method="POST">
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
     
    {!! $users->links() !!}
   
@endsection
</x-admin-layout>