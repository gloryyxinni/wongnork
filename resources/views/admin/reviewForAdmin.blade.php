@extends('admin.layout')

@section('content')
    <h1>Review List</h1>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif  

    <table class="table table-bordered">
        <tr>

            <th>User</th>
            <th>Restaurant</th>
            <th>Rating</th>
            <th>Comment</th>
            <th width="250px">Action</th>

        </tr>
        @foreach ($reviews as $review)
        <tr>
           

            <td>{{ $review->User_id }}</td>
            <td>{{ $review->Restaurant_id}}</td>
            <td>{{ $review->Rating_Rating_id }}</td>
            <td>{{ $review->Comment_Comment_id }}</td>
            
            <td>
                <form action="{{ route('reviews.destroy',$review->id) }}" method="POST">

                    @csrf
                    @method('DELETE')
  
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach 
    </table>

    {!! $reviews->links() !!}

@endsection