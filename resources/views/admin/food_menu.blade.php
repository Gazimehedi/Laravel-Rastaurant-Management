@extends('admin.layouts.layout')
@section('page_title','Food Menu Page')
@section('content')
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Food Menu </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Food list</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Food lists</h4>
                    <a href="{{url('/admin/addfoodmenu')}}" ><label class="badge badge-primary"><i class="mdi mdi-account-plus"></i> Add Food Menu</label></a>
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>${{$item->price}}</td>
                                <td><img style="width: 80px;height: 80px;border-radius:100%;" src="{{asset('media/food/'.$item->image)}}" alt="{{$item->title}}"></td>
                                <td>{{Str::words($item->description,$words = 5, $end='...')}}</td>
                                <td>
                                  @if ($item->food_type==1)
                                    Breakfast
                                  @elseif ($item->food_type==2)
                                    Lunch
                                  @elseif ($item->food_type==3)
                                    Dinner
                                  @elseif ($item->food_type==4)
                                    Cake
                                  @else
                                    <i>Null</i>
                                  @endif
                                </td>
                                <td>
                                  <a href="{{url('/admin/editfoodmenu',$item->id)}}"><label class="badge badge-info"><i class="mdi mdi-lead-pencil"></i> Edit</label></a> &nbsp; 
                                  <a href="{{url('/admin/foodmenu/delete',$item->id)}}"><label class="badge badge-danger"><i class="mdi mdi-delete-forever"></i> Delete</label></a>
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