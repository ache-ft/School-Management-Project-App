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
    <h5 class="card-title">@lang('messages.Edit_Subject')</h5>
</div>
  <form action="/add_subject/store" method="post" class="custom-form">
    @csrf
    <div class="form-group row">
      <label for="subject_name" class="col-sm-3 col-form-label">@lang('messages.Subject_Name') *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="subject_name" name="subject_name" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="subject_type" class="col-sm-3 col-form-label">@lang('messages.Subject_Type') *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="subject_type" name="subject_type" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="level" class="col-sm-3 col-form-label">@lang('messages.Level') *</label>
      <div class="col-sm-9">
      <input type="text" class="form-control" id="level" name="level" required>

       
      </div>
    </div>
   
    <div class="form-group row">
    <div class="col-sm-9 offset-sm-3">
      <input type="submit" class="btn btn-primary" value="@lang('messages.saveBtn')">
      <input type="reset" class="btn btn-secondary" value="@lang('messages.Cancel')">
      </div>
    </div>
  </form>
</div>


@endsection

