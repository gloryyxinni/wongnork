@extends('admin.layout')

@section('content')
     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Review list</h2>
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
            <th>User</th>
            <th>Restaurant</th>
            <th>Rating</th>
            <th>Comment</th>


        </tr>
        @foreach ($reviews as $review)
        <tr>

            <td>{{ $review->User_id }}</td>
            <td>{{ $review->Restaurant_id}}</td>
            <td>{{ $review->Rating_Rating_id }}</td>
            <td>{{ $review->Comment_Comment_id }}</td>

        </tr>
        @endforeach 
    </table>

    {!! $reviews->links() !!}

