@extends('admin.layouts.layout')
@section('page_title','Slider Page')
@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Slider </h3>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          <h4 class="card-title">Add Slider</h4>
            <form action="{{url('admin/addslider')}}" method="post" enctype="multipart/form-data" class="forms-sample">
            @csrf
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
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Slider lists</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><img style="width: 100%;height: 200px;border-radius:10px;" src="{{asset('media/slider/'.$item->image)}}" alt="{{$item->name}}"></td>
                        <td>
                          <a href="{{url('/admin/editslider',$item->id)}}"><label class="badge badge-info"><i class="mdi mdi-lead-pencil"></i> Edit</label></a> &nbsp; 
                          <a href="{{url('/admin/slider/delete',$item->id)}}"><label class="badge badge-danger"><i class="mdi mdi-delete-forever"></i> Delete</label></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection