
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
    <h5 class="card-title">Edit Book</h5>
</div>
  <form action="/all_books/update" method="post" enctype="multipart/form-data" class="custom-form">
    @csrf
    <input type="hidden" name="id" value="{{$book->id}}">

    <div class="form-group row">
      <label for="book_name" class="col-sm-3 col-form-label">@lang('messages.Book_Name') *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="book_name" name="book_name" value="{{ $book->book_name }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="book_name" class="col-sm-3 col-form-label">@lang('messages.Subject') *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="subject" name="subject" value="{{ $book->subject }}" >
      </div>
    </div>
    <div class="form-group row">
      <label for="writter_name" class="col-sm-3 col-form-label">@lang('messages.Writter_Name') *</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="writter_name" name="writter_name" value="{{ $book->writter_name }}" >
      </div>
    </div>
    <div class="form-group row">
      <label for="select_class" class="col-sm-3 col-form-label">@lang('messages.Level') *</label>
      <div class="col-sm-9">
        <select class="form-control" id="level" name="level" >
          <option value="{{ $book->Level }}">Select Level</option>
          <option value="level 1">level 1</option>
          <option value="level 2">level 2</option>
          <option value="level 3">level 3</option>
          <option value="level 4">level 4</option>
          <option value="level 5">level 5</option>
          
        </select>
      </div>
    </div>
    
    <div class="form-group row">
      <label for="publishing_date" class="col-sm-3 col-form-label">@lang('messages.Publishing_Date')  *</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="publishing_date" name="publishing_date" value="{{ $book->publishing_date }}" >
      </div>
    </div>
    <div class="form-group row">
      <label for="upload_date" class="col-sm-3 col-form-label">@lang('messages.Upload_Date') *</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" id="upload_date" name="upload_date" value="{{ $book->upload_date }}" >
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-9 offset-sm-3">
        <input type="submit" class="btn btn-primary" value="@lang('messages.saveBtn')" onclick="return confirm(&quot;Are you sure you want save update?&quot;)">
        <input type="reset" class="btn btn-secondary" value="@lang('messages.Cancel')" >
      </div>
    </div>
  </form>
</div>


@endsection
