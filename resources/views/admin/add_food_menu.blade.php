
@extends('admin.layouts.layout')
@section('page_title','Add Food Menu Page')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Add Food Menu </h3>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data" class="forms-sample">
            @csrf
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title here" required>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Enter price here" required>
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image" placeholder="Enter image here" required>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" name="description" class="form-control" id="description" placeholder="Description" required></textarea>
              </div>
              <div class="form-group">
                <label for="food_type">Food Type</label>
                <select style="background-color:#ddd;color:#000" name="food_type" class="form-control" id="food_type" required>
                  <option value="">Select food type</option>
                  <option value="1">Breakfast</option>
                  <option value="2">Lunch</option>
                  <option value="3">Dinner</option>
                  <option value="4">Cake</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection