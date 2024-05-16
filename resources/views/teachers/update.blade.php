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
    <h5 class="card-title">@lang('messages.Edit_Teacher')</h5>
</div>
<form action="/all_teachers/update" method="post" enctype="multipart/form-data" class="custom-form">
  @csrf
<input type="hidden" name="id" value="{{$teacher->id}}">

  <div class="form-group row">
    <label for="first_name" class="col-sm-3 col-form-label">@lang('messages. First_Name') *</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="first_name" name="first_name" value="{{$teacher->first_name}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="last_name" class="col-sm-3 col-form-label">@lang('messages. Last_Name') *</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="last_name" name="last_name" value="{{$teacher->last_name}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="gender" class="col-sm-3 col-form-label">@lang('messages.Gender') *</label>
    <div class="col-sm-9">
      <select class="form-control" id="gender" name="gender" value="{{$teacher->gender}}">
        <option value="male">Select...</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="father_name" class="col-sm-3 col-form-label">@lang('messages.Father_Name') *</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="father_name" name="father_name" value="{{$teacher->father_name}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="mother_name" class="col-sm-3 col-form-label">@lang('messages.Mother_Name') *</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{$teacher->mother_name}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="date_of_birth" class="col-sm-3 col-form-label">@lang('messages.Date_of_birth') *</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="dd/mm/yyyy" value="{{$teacher->date_of_birth}}">
    </div>
  </div>
  

  <div class="form-group row">
    <label for="nic" class="col-sm-3 col-form-label">@lang('messages.NIC')</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="nic" name="nic" value="{{$teacher->nic}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="level" class="col-sm-3 col-form-label">@lang('messages.Level') *</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="level" name="level" placeholder="" value="{{$teacher->level}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="subject" class="col-sm-3 col-form-label">@lang('messages.Subject') *</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="subject" name="subject" placeholder="" value="{{$teacher->subject}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="address" class="col-sm-3 col-form-label">@lang('messages.Address')</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="address" name="address" value="{{$teacher->address}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label">@lang('messages.Mail')</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="email" name="email" value="{{$teacher->email}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="phone" class="col-sm-3 col-form-label">@lang('messages.Phone')</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="phone" name="phone" value="{{$teacher->phone}}">
    </div>
  </div>
  
  
  <div class="form-group row">
    <label for="bio" class="col-sm-3 col-form-label">@lang('messages.Bio')</label>
    <div class="col-sm-9">
      <textarea class="form-control" id="bio" name="bio">{{$teacher->bio}}"</textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="photo" class="col-sm-3 col-form-label">@lang('messages.upload_image')</label>
    <div class="col-sm-9">
      <input type="file" class="form-control-file" id="image" name="image" >
      <img src="{{asset('storage/teacherprofile'.'/'.$teacher->image)}}" width="35px" class="">

    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-9 offset-sm-3">
      <button type="submit" class="btn btn-primary" onclick="return confirm(&quot;Are you sure you want save update?&quot;)">@lang('messages.saveBtn')</button>
      <button type="reset" class="btn btn-secondary">@lang('messages.Cancel')</button>
    </div>
  </div>
</form>
</div>


@endsection

