@extends('baseTemplate')

@section('title')
    posts
@endsection

@section('maincontent')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Posted BY</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post['id'] }}</td>
                    <td>{{ $post['Title'] }}</td>
                    <td>{{ $post['PostedBY'] }}</td>
                    <td>{{ $post['CreatedAt'] }}</td>
                    <td>
                        <button class="btn btn-danger">View</button>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-warning">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
