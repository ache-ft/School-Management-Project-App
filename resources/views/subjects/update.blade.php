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
    <h5 class="card-title">Edit Subject</h5>
</div>
  <form action="/all_subjects/update" method="post" class="custom-form">
    @csrf
    <input type="hidden" name="id" value="{{$subject->id}}">

    <div class="form-group row">
      <label for="subject_name" class="col-sm-3 col-form-label">Subject Name *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="subject_name" name="subject_name" value="{{$subject->subject_name}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="subject_type" class="col-sm-3 col-form-label">Subject Type *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="subject_type" name="subject_type"  value="{{$subject->subject_type}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="level" class="col-sm-3 col-form-label">Select Level *</label>
      <div class="col-sm-9">
      <input type="text" class="form-control" id="level" name="level"  value="{{$subject->level}}">

       
      </div>
    </div>
   
    <div class="form-group row">
    <div class="col-sm-9 offset-sm-3">
      <input type="submit" class="btn btn-primary" value="Save" onclick="return confirm(&quot;Are you sure you want save update?&quot;)">
      <input type="reset" class="btn btn-secondary" value="Reset">
      </div>
    </div>
  </form>
</div>


@endsection

