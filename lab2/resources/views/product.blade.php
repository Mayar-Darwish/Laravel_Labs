@extends('baseTemplate')

@section('title')
    product
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

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['title'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>{{ $product['created_at'] }}</td>
                    <td>
                        <a href="{{route('edit',$product->id)}}"class="btn btn-primary">Edit</a>
                        <a href="{{route('delete',$product->id)}}" class="btn btn-warning">Delete</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
    <a href="{{route('createProduct')}} "class="btn btn-danger" >create</a>

@endsection
