
@extends('admin.layouts.layout')
@section('page_title','Edit Chefs Page')
@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit Chefs </h3>
            </div>
            <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{$data->name}}" required>
                      </div>
                      <div class="form-group">
                        <label for="speciality">Speciality</label>
                        <input type="text" name="speciality" class="form-control" id="speciality" placeholder="Enter speciality here" value="{{$data->speciality}}" required>
                      </div>
                      <div class="form-group">
                        <img style="width:250px;height:300px;" src="{{asset('media/chefs/'.$data->image)}}" alt="">
                        <br>
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Enter image here">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection