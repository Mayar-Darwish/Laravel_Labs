@extends('baseTemplate')

@section('title')
    edit
@endsection

@section('maincontent')
    <div class="container">
        <form method="POST" action="{{route('update',$product->id)}}">
            @method('put')
            @csrf

            <div class="form-group row my-4">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title" value="{{$product->title}}">
                </div>
            </div>

            <div class="form-group row my-4">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" id="inputPassword3"  value="{{$product->description}}"
                        placeholder="Description">
                </div>
            </div>

            <div class="form-group row my-4 ">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
