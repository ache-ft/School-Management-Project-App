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

    
    <form action="/add_student/store" method="post" enctype="multipart/form-data" class="custom-form">
       @csrf
       <div class="container bg-white pb-3">
     
      <div class="card-header p-1 my-5 bg-white "> 
        <h5 class="card-title">@lang('messages.Student_Details')</h5>
    </div>
        <div class="row">
            <div class="col-md-6">
                
                <div class="form-group">
                    <label for="student_first_name"> @lang('messages. First_Name') *</label>
                    <input type="text" class="form-control" id="student_first_name" name="student_first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">@lang('messages. Last_Name') *</label>
                    <input type="text" class="form-control" id="student_last_name" name="student_last_name" required>
                </div>
                <div class="form-group">
                    <label for="student_gender">@lang('messages.Gender') *</label>
                    <select class="form-control" id="student_gender" name="student_gender" required>
                        <option value="male">Select...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="student_dob">@lang('messages.Date_of_birth') *</label>
                    <input type="date" class="form-control" id="student_date_of_birth" name="student_date_of_birth" placeholder="dd/mm/yyyy" required>
                </div>
                <div class="form-group">
                  <label for="bio">@lang('messages.Bio') *</label>
                  <textarea class="form-control" id="student_bio" name="student_bio"></textarea>
              </div>
               
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="student_admission_id">@lang('messages.Admission_ID')</label>
                  <input type="text" class="form-control" id="student_admission_id" name="student_admission_id">
                </div>
                <div class="form-group">
                    <label for="student_email">@lang('messages.Mail') *</label>
                    <input type="email" class="form-control" id="student_email" name="student_email">
                </div>
                
                <div class="form-group">
                    <label for="student_phone">@lang('messages.Phone') *</label>
                    <input type="text" class="form-control" id="student_phone" name="student_phone">
                </div>
                <div class="form-group">
                  <label for="student_address">@lang('messages.Address') *</label>
                  <input type="text" class="form-control" id="student_address" name="student_address" required>
              </div>
                <div class="form-group">
                    <label for="student_level">@lang('messages.Level') *</label>
                    <input type="text" class="form-control" id="student_level" name="student_level" required>
                </div>
                <div class="form-group">
                  <label for="student_image">@lang('messages.upload_image')</label>
                  <input type="file" class="form-control-file" id="student_image" name="student_image">
              </div>
               
               
            </div>
        </div>
        
      </div>
      {{-- ================================parent details======================= --}}
      <div class="container bg-white pb-3">

        <div class="card-header p-1 my-5 bg-white"> 
        <h5 class="card-title">@lang('messages.Parents_Details')</h5>
        </div>
        {{-- <form action="/add_parent/store" method="post" enctype="multipart/form-data" class="custom-form">
        @csrf --}}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="first_name">@lang('messages. First_Name') *</label>
              <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
              <label for="last_name">@lang('messages. Last_Name') *</label>
              <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
              <label for="gender">@lang('messages.Gender') *</label>
              <select class="form-control" id="gender" name="gender" required>
                <option value="">Select...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label for="admission_id">@lang('messages.NIC')</label>
              <input type="text" class="form-control" id="cin" name="cin">
            </div>
            <div class="form-group">
              <label for="bio">@lang('messages.Bio') *</label>
              <textarea class="form-control" id="bio" name="bio"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="occupation">@lang('messages.Occupation')</label>
              <input type="text" class="form-control" id="occupation" name="occupation">
            </div>
            <div class="form-group">
              <label for="address">@lang('messages.Address')</label>
              <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="form-group">
              <label for="email">@lang('messages.Mail')</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="phone">@lang('messages.Phone')</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="image">@lang('messages.upload_image')</label>
              <input type="file" class="form-control-file" id="image" name="image">
            </div>
          </div>
        </div>
       
        <div class="form-group row">
          <div class="col-sm-9 offset-sm-3">
            <input type="submit" class="btn btn-primary" value="@lang('messages.saveBtn')">
            <input type="reset" class="btn btn-secondary" value="@lang('messages.Cancel')">
          </div>
        </div>
        
      </div > 


    </form>






@endsection