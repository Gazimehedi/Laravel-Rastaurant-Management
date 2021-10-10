@extends('admin.layouts.layout')
@section('page_title','Chefs Page')
@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Chefs </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Chefs list</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Chefs lists</h4>
            <a href="{{url('/admin/addchefs')}}" ><label class="badge badge-primary"><i class="mdi mdi-account-plus"></i> Add Chefs</label></a>
            </p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Speciality</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->speciality}}</td>
                        <td><img style="width: 80px;height: 80px;border-radius:10%;" src="{{asset('media/chefs/'.$item->image)}}" alt="{{$item->name}}"></td>
                        <td>
                          <a href="{{url('/admin/editchefs',$item->id)}}"><label class="badge badge-info"><i class="mdi mdi-lead-pencil"></i> Edit</label></a> &nbsp; 
                          <a href="{{url('/admin/chefs/delete',$item->id)}}"><label class="badge badge-danger"><i class="mdi mdi-delete-forever"></i> Delete</label></a>
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