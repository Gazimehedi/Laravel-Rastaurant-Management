@extends('admin.layouts.layout')
@section('page_title','Oders Page')
@section('content')
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Orders </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Orders list</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Orders lists</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Food Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->foodname}}</td>
                                <td>{{$order->price}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->status}}</td>
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