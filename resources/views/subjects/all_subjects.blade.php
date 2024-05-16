@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{asset('table.css')}}">
@endsection
@section('title')
@endsection


@section('main')
<div class="card rounded m-3 shadow border-0">
  <div class="container m-5">
    <form action="/student_search_data_by_name" method="GET">
      <div class="form-group col-sm-6">
        <label for="SearchByName">@lang('messages.search_name') :</label>
        <input type="text" class="form-control" name="SearchByName"  id="SearchByName" placeholder="@lang('messages.Enter_Name')">
      </div>
      
      <button type="submit" class="btn btn-primary">@lang('messages.searchBtn')</button>
    </form>
 </div>
</div>

    <div class="mx-3 py-5">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
        <div class=" d-flex flex-row-reverse pl-2">
            <a href="{{url('/add_subject')}}" class="btn bg-gradient-darkblue text-light "><i class="material-icons">&#xE147;</i> <span>Add New Subject</span></a>
                    
          </div>
          <div class="card-header p-2 my-5">
            <h5 class="card-title ">@lang('messages.All_Subjects')</h5>
        </div> 

          <div class="table-responsive">

            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>@lang('messages.Id_number')</th>
                  <th>@lang('messages.Subject_Name')</th>
                  <th>@lang('messages.Subject_Type')</th>
                  <th>@lang('messages.Level')</th>
                  <!-- <th>Date</th> -->
                 
                  <th>@lang('messages.Action')</th>

                </tr>
              </thead>
              <tbody>
               
              
              @foreach ($subjects as $subject)
                <tr>
                  <td>{{$subject->id}}</td>
                  <td>{{$subject->subject_name}}</td>
                  <td>{{$subject->subject_type}}</td>
                  <td>{{$subject->level}}</td>
                  
                  
                  <td style="padding-left: 12px;">
                    <a href="{{url ('/all_subjects/edit').'/'.$subject->id }}" class="edit"  style=" margin-right:12px;">
                    <i class="fa-solid fa-pen-to-square" style="color: #042954;"></i>
                    </a>
                 
                    <form action='/all_subjects/destroy/{{ $subject->id }}'  method="post">
                    @csrf
                    @method("delete")
                      <button style="border:none ; background-color: transparent;" type='submit' onclick="return confirm(&quot;confirm delete?&quot;)"><i class="fa-solid fa-trash" style="color: rgb(191, 32, 4); border:none ;"></i> </button>
                    </form> 
               
                </td>
                 
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
@endsection

@section('script')
<script src="{{asset('table.js')}}"></script>
@endsection