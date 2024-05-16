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
    <h5 class="card-title">@lang('messages.Add_New_Level')</h5>
</div>
  <form action="/add_level/store" method="post" enctype="multipart/form-data" class="custom-form">
    @csrf
    <div class="form-group row">
      <label for="teacher_name" class="col-sm-3 col-form-label">@lang('messages.Teacher_Name') *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="teacher_name" name="teacher_name" >
      </div>
    </div>

    <div class="form-group row">
      <label for="gender" class="col-sm-3 col-form-label">@lang('messages.Gender') *</label>
      <div class="col-sm-9">
        <select class="form-control" id="gender" name="gender" >
          <option value="male">Select...</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="level" class="col-sm-3 col-form-label">@lang('messages.Level') *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="level" name="level" >
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-sm-3 col-form-label">@lang('messages.Subject')</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="subject" name="subject">
      </div>
    </div>

    <div class="form-group row">
      <label for="starting_time" class="col-sm-3 col-form-label">@lang('messages.Starting_Time')</label>
      <div class="col-sm-9">
          <input
          type="datetime-local"
          id="starting_tim"
          name="starting_time"
          
           />      </div>
    </div>
    <div class="form-group row">
      <label for="ending_time" class="col-sm-3 col-form-label">@lang('messages.End_At')</label>
      <div class="col-sm-9">
          <input
          type="datetime-local"
          id="ending_time"
          name="ending_time"
          
           />      
          </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-sm-3 col-form-label">@lang('messages.Mail')</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" id="email" name="email">
      </div>
    </div>

   
    <div class="form-group row">
      <div class="col-sm-9 offset-sm-3">
        <button type="submit" class="btn btn-primary">@lang('messages.saveBtn')</button>
        <button type="reset" class="btn btn-secondary">@lang('messages.Cancel')</button>
      </div>
    </div>
  </form>
</div>


  

@endsection
