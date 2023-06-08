@extends('baseTemplate')

@section('title')
    Form
@endsection

@section('maincontent')
    <div class="container">
        <form >
            <div class="form-group row my-4">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Title">
              </div>
            </div>
            <div class="form-group row my-4">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Description">
              </div>
            </div>
            <div class="form-group row my-4">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Created by</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Created by">
              </div>
            </div>

            <div class="form-group row my-4 ">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </div>
          </form>
    </div>

@endsection