
@extends('admin.layouts.layout')
@section('page_title','Edit Food Menu Page')
@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit Food Menu </h3>
            </div>
            <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title here" value="{{$data->title}}" required>
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter price here" value="{{$data->price}}" required>
                      </div>
                      <div class="form-group">
                        <img style="width:250px;height:300px;" src="{{asset('media/food/'.$data->image)}}" alt="">
                        <br>
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Enter image here">
                      </div>

                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" class="form-control" id="description" placeholder="Description" required>{{$data->description}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="food_type">Food Type</label>
                        @php
                          if($data->food_type==1){
                            $breakfast = "selected";
                          }else{
                            $breakfast = '';
                          }
                          if($data->food_type==2){
                            $lunch = "selected";
                          }else{
                            $lunch = '';
                          }
                          if($data->food_type==3){
                            $dinner = "selected";
                          }else{
                            $dinner = '';
                          }
                          if($data->food_type==4){
                            $cake = "selected";
                          }else{
                            $cake = '';
                          }
                        @endphp
                        <select style="background-color:#ddd;color:#000" name="food_type" class="form-control" id="food_type" required>
                          <option value="0">Select food type</option>
                          <option value="1" {{$breakfast}}>Breakfast</option>
                          <option value="2" {{$lunch}}>Lunch</option>
                          <option value="3" {{$dinner}}>Dinner</option>
                          <option value="4" {{$cake}}>Cake</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection