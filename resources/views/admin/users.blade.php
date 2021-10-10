@extends('admin.layouts.layout')
@section('page_title','Users Page')
@section('content')
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Users </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Users list</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users lists</h4>
                    <a href="{{url('/admin/add_user')}}" ><label class="badge badge-primary"><i class="mdi mdi-account-plus"></i> Add User</label></a>
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                @if ($user->user_type==1)
                                <label class="badge badge-success"><i class="mdi mdi-admin"></i> Admin</label>
                                @else
                                <label class="badge badge-info"><i class="mdi mdi-user"></i> User</label>
                                @endif
                                </td>
                                <td>
                                @if ($user->user_type==1)
                                <label class="badge badge-danger"><i class="mdi mdi-block-helper"></i> Not Allow</label>
                                @else
                                <a href="{{url('/admin/users/delete',$user->id)}}"><label class="badge badge-danger"><i class="mdi mdi-delete-forever"></i> Delete</label></a>
                                @endif
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
          <!-- content-wrapper ends --> 
@endsection