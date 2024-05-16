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

    
    <form action="/all_students/update" method="post" enctype="multipart/form-data" class="custom-form">
      <div class="container bg-white pb-3">
      @csrf
    <input type="hidden" name="id" value="{{$student->id}}">

      <div class="card-header p-1 my-5 bg-white "> 
        <h5 class="card-title">@lang('messages.Student_Details')</h5>
    </div>
        <div class="row">
            <div class="col-md-6">
                
                <div class="form-group">
                    <label for="student_first_name">@lang('messages. First_Name') *</label>
                    <input type="text" class="form-control" id="student_first_name" name="student_first_name" value="{{$student->first_name}}">
                </div>
                <div class="form-group">
                    <label for="last_name">@lang('messages. Last_Name') *</label>
                    <input type="text" class="form-control" id="student_last_name" name="student_last_name" value="{{$student->last_name}}">
                </div>
                <div class="form-group">
                    <label for="student_gender">@lang('messages.Gender') *</label>
                    <select class="form-control" id="student_gender" name="student_gender" value="{{$student->gender}}">
                        <option value="male">Select...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="student_dob">@lang('messages.Date_of_birth') *</label>
                    <input type="date" class="form-control" id="student_date_of_birth" name="student_date_of_birth" placeholder="dd/mm/yyyy" value="{{$student->date_of_birth}}">
                </div>
                <div class="form-group">
                  <label for="bio">@lang('messages.Bio') *</label>
                  <textarea class="form-control" id="student_bio" name="student_bio">{{$student->bio}}"</textarea>
              </div>
               
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="student_admission_id">@lang('messages.Admission_ID')</label>
                  <input type="text" class="form-control" id="student_admission_id" name="student_admission_id" value="{{$student->admission_id}}">
                </div>
                <div class="form-group">
                    <label for="student_email">@lang('messages.Mail')</label>
                    <input type="email" class="form-control" id="student_email" name="student_email" value="{{$student->email}}">
                </div>
                
                <div class="form-group">
                    <label for="student_phone">@lang('messages.Phone')</label>
                    <input type="text" class="form-control" id="student_phone" name="student_phone" value="{{$student->phone}}">
                </div>
                <div class="form-group">
                  <label for="student_address">@lang('messages.Address') *</label>
                  <input type="text" class="form-control" id="student_address" name="student_address" value="{{$student->address}}">
              </div>
                <div class="form-group">
                    <label for="student_level">@lang('messages.Level') *</label>
                    <input type="text" class="form-control" id="student_level" name="student_level" value="{{$student->level}}">
                </div>
                <div class="form-group">
                  <label for="student_image">@lang('messages.upload_image')</label>
                  <input type="file" class="form-control-file" id="student_image" name="student_image">
                  <img src="{{asset('storage/studentprofile'.'/'.$student->image)}}" width="25px" class="">

              </div>
               
               
            </div>
        </div>
        
      </div>
      
      <div class="form-group row">
        <div class="col-sm-9 offset-sm-3">
          <input type="submit" class="btn btn-primary" value="@lang('messages.saveBtn')" onclick="return confirm(&quot;Are you sure you want save update?&quot;)">
          <input type="reset" class="btn btn-secondary" value="@lang('messages.Cancel')">
        </div>
      </div>


    </form>






@endsection