@extends('layouts.master')
@section('style')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
   
    @media (min-width: 576px) {
      .custom-form label {
        width: 150px;
      }
    }
  </style>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
@section('main')



<div class="container">
<div class="card-header p-1 my-5">
    <h5 class="card-title">@lang('messages.Edit_Parent') </h5>
</div>
  <form action="/all_parents/update" method="post" enctype="multipart/form-data" class="custom-form">
    @csrf
    <input type="hidden" name="id" value="{{$parent->id}}">
    <div class="form-group row">
      <label for="first_name" class="col-sm-3 col-form-label">@lang('messages. First_Name') *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="first_name" name="first_name" value="{{$parent->first_name}}" >
      </div>
    </div>
    <div class="form-group row">
      <label for="last_name" class="col-sm-3 col-form-label">@lang('messages. Last_Name') *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="last_name" name="last_name" value="{{$parent->last_name}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="gender" class="col-sm-3 col-form-label">@lang('messages.Gender') *</label>
      <div class="col-sm-9">
        <select class="form-control" id="gender" name="gender" >
          <option value="{{$parent->gender}}">Select...</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="admission_id" class="col-sm-3 col-form-label">@lang('messages.NIC')</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="cin" name="cin" value="{{$parent->cin}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="admission_id" class="col-sm-3 col-form-label">@lang('messages.Occupation')</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="occupation" name="occupation" value="{{$parent->occupation}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="admission_id" class="col-sm-3 col-form-label">@lang('messages.Address')</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="address" name="address" value="{{$parent->address}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-sm-3 col-form-label">@lang('messages.Mail')</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" id="email" name="email" value="{{$parent->email}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="phone" class="col-sm-3 col-form-label">@lang('messages.Phone')</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="phone" name="phone" value="{{$parent->phone}}">
      </div>
    </div>
    
    
    <div class="form-group row">
      <label for="bio" class="col-sm-3 col-form-label">@lang('messages.Bio')</label>
      <div class="col-sm-9">
        <textarea class="form-control" id="bio" name="bio">{{$parent->bio}}</textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="photo" class="col-sm-3 col-form-label">@lang('messages.upload_image')</label>
      <div class="col-sm-9">
        <input type="file" class="form-control-file" id="image" name="image">
        <img src="{{asset('storage/parentprofile'.'/'.$parent->image)}}" width="25px" class="">

      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-9 offset-sm-3">
      <input type="submit" class="btn btn-primary" value="@lang('messages.saveBtn')" onclick="return confirm(&quot;Are you sure you want save update?&quot;)">
      <input type="reset" class="btn btn-secondary" value="@lang('messages.Cancel')">
      </div>
    </div>
  </form>
</div>


@endsection