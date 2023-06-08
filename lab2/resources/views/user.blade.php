@extends('basetemplate')

@section('title')
    User
@endsection

@section('maincontent')
    <div class="container">
        <table class="table table-warning border my-4 ">

            <thead class="table-dark">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Created By</td>
                </tr>
            </thead>
            <tbody>


                @foreach ($users as $aa)
                    <tr>
                        <td>{{ $aa->id }}</td>
                        <td>{{ $aa->name }}</td>
                        <td>{{ $aa['email'] }}</td>
                        <td>{{ $aa->created_at }}</td>


                    </tr>
                @endforeach


            </tbody>

        </table>
        <h5>Pagination</h5>
        <div class="pagination-links">
            {{ $users->links() }}
        </div>


    </div>
@endsection
