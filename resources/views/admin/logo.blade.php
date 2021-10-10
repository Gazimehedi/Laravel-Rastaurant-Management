
@extends('admin.layouts.layout')
@section('page_title','Site Icon Page')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Site Logos </h3>
    </div>
    <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form action="{{url('admin/logo',$logo->id)}}" method="post" enctype="multipart/form-data" class="forms-sample">
            @csrf
              <div class="form-group">
                <label style="font-size:17px;font-weight:bold" for="image">Site Icon</label>
                <img style="width:100px;height:100px;padding:10px;background-color:#fff;border-radius:15px;margin:15px 0;" src="{{asset('media/logo/'.$logo->site_icon)}}" alt="site icon">
                <input type="file" name="icon" class="form-control" id="image" placeholder="Enter image here">
              </div>
              <br><br>
              <div class="form-group">
                <label style="font-size:18px;font-weight:bold" for="image">Logo</label>
                <img style="width:300px;padding:20px;background-color:#fff;border-radius:15px;margin:15px 0;" src="{{asset('media/logo/'.$logo->logo)}}" alt="logo">
                <input type="file" name="logo" class="form-control" id="image" placeholder="Enter image here">
              </div>
              <br><br>
              <div class="form-group">
                <label style="font-size:18px;font-weight:bold" for="image">Footer Logo</label>
                <img style="width:300px;padding:20px;background-color:#000;border-radius:15px;margin:15px 0;" src="{{asset('media/logo/'.$logo->footer_logo)}}" alt="logo">
                <input type="file" name="footer_logo" class="form-control" id="image" placeholder="Enter image here">
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