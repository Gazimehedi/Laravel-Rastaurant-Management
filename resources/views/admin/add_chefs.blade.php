
@extends('admin.layouts.layout')
@section('page_title','Add Chefs Page')
@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Chefs </h3>
            </div>
            <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" class="forms-sample">
                    @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                      </div>
                      <div class="form-group">
                        <label for="speciality">Speciality</label>
                        <input type="text" name="speciality" class="form-control" id="speciality" placeholder="Enter speciality here" required>
                      </div>
                      <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Enter image here" required>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Save</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection