@extends('admin.layouts.layout')
@section('page_title','Reservation Page')
@section('content')
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Reservations </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Reservations list</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Reservations lists</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Guests</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->guests}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->time}}</td>
                                <td>{{$item->message}}</td>
                                <td> 
                                  <a href="{{url('/admin/reservation/delete',$item->id)}}"><label class="badge badge-danger"><i class="mdi mdi-delete-forever"></i> Delete</label></a>
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