
@extends('admin.layouts.layout')
@section('page_title','Edit Slider')
@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit Slider </h3>
            </div>
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                      <div class="form-group">
                        <img style="width:100%;height:300px;" src="{{asset('media/slider/'.$data->image)}}" alt="">
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