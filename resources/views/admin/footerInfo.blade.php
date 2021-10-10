
@extends('admin.layouts.layout')
@section('page_title','Footer Setting Page')
@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Footer Setting </h3>
            </div>
            <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="{{url('admin/footerinfo',$data->id)}}" method="post" class="forms-sample">
                    @csrf
                      <h4 class="h4">Social Link</h4>
                      <br>
                      <div class="form-group">
                        <label for="fb_link">Facebook Link</label>
                        <input type="text" name="fb_link" class="form-control" id="fb_link" placeholder="Facebook link here" value="{{$data->fb_link}}" required>
                      </div>
                      <div class="form-group">
                        <label for="tw_link">Twitter Link</label>
                        <input type="text" name="tw_link" class="form-control" id="tw_link" placeholder="Twitter link here" value="{{$data->tw_link}}" required>
                      </div>
                      <div class="form-group">
                        <label for="in_link">LinkedIn Link</label>
                        <input type="text" name="in_link" class="form-control" id="in_link" placeholder="LinkedIn link here" value="{{$data->in_link}}" required>
                      </div>
                      <div class="form-group">
                        <label for="ig_link">Instagram Link</label>
                        <input type="text" name="ig_link" class="form-control" id="ig_link" placeholder="Instagram link here" value="{{$data->ig_link}}" required>
                      </div>
                      <br><br> 
                      <h4 class="h4">Footer Info</h4>
                      <br> 
                      <div class="form-group">
                        <label for="footerInfo">Copyright Text</label>
                        <input type="text" name="footer_info" class="form-control" id="ig_link" placeholder="Footer info here" value="{{$data->footer_info}}" required>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Save</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection