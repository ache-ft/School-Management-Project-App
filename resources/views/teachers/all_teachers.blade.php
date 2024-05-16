@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{asset('table.css')}}">
@endsection
@section('title')
@endsection


@section('main')
<div class="card rounded m-3 shadow border-0">
  <div class="container m-5">
    <form action="/teacher_search_data_by_name" method="GET">
      <div class="form-group col-sm-6">
        <label for="SearchByName">@lang('messages.search_name') :</label>
        <input type="text" class="form-control" name="SearchByName"  id="SearchByName" placeholder="@lang('messages.placeholder_search_name')">
      </div>
      
      <button type="submit" class="btn btn-primary">@lang('messages.searchBtn')</button>
    </form>
 </div>
</div>
   
    <div class="mx-3 py-5">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class=" d-flex flex-row-reverse pl-2">
            <a href="{{url('/add_teacher')}}" class="btn bg-gradient-darkblue text-light "><i class="material-icons">&#xE147;</i> <span>@lang('messages.Add_Teacher')</span></a>
                    
          </div>
          <div class="card-header p-2 my-5">
            <h5 class="card-title ">@lang('messages.All_Teachers')</h5>
        </div>
          <div class="table-responsive">

            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>@lang('messages.Id_number')</th>
                  <th>@lang('messages.Image')</th>
                  <th>@lang('messages. First_Name')</th>
                  <th>@lang('messages. Last_Name')</th>
                  <th>@lang('messages.Gender')</th>
                  <th>@lang('messages.Level') </th>
                  <th>@lang('messages.Subject')</th>
                  <th>@lang('messages.Father_Name')</th>
                  <th>@lang('messages.Mother_Name')</th>
                  <th>@lang('messages.Date_of_birth')</th>
                  <th>@lang('messages.NIC')</th>
                  <th>@lang('messages.Address')</th>
                  <th>@lang('messages.Mail')</th>
                  <th>@lang('messages.Phone')</th>
                  <th>@lang('messages.Action')</th>

                </tr>
              </thead>
              <tbody>
              
              @foreach ($teachers as $teacher)
                <tr>
                  <td>{{$teacher->id}}</td>
                  <td><img src="{{asset('storage/teacherprofile'.'/'.$teacher->image)}}" width="25px" class="rounded-circle "></td>
                  <td>{{$teacher->first_name}}</td>
                  <td>{{$teacher->last_name}}</td>
                  <td>{{$teacher->gender}}</td>
                  <td>{{$teacher->level}}</td>
                  <td>{{$teacher->subject}}</td>
                  <td>{{$teacher->father_name}}</td>
                  <td>{{$teacher->mother_name}}</td>
                  <td>{{$teacher->date_of_birth}}</td>
                  <td>{{$teacher->nic}}</td>
                  <td>{{$teacher->address}}</td>
                  <td>{{$teacher->email}}</td>
                  <td>{{$teacher->phone}}</td>
                  <td style="padding-left: 12px;">
                    <a href="{{url ('/all_teachers/edit').'/'.$teacher->id }}" class="edit"  style=" margin-right:12px;">
                    <i class="fa-solid fa-pen-to-square" style="color: #042954;"></i>
                    </a>
                    <!-- <a href='#deleteModal' class="delete" data-toggle="modal">
                    <i class="fa-solid fa-trash" style="color: rgb(191, 32, 4);"></i>
                    </a>-->
                    <!-- <form action='/all_teachers/destroy/{{ $teacher->id }}'  method="post">
                    @csrf
                      <button style="border:none ; background-color: transteacher;" type='submit'><i class="fa-solid fa-trash" style="color: rgb(191, 32, 4); border:none ;"></i> </button>
                    </form>  -->
                    <form action='/all_teachers/destroy/{{ $teacher->id }}'  method="post">
                    @csrf
                    @method("delete")
                      <button style="border:none ; background-color: transparent;" type='submit' onclick="return confirm(&quot;Are You Sure You Want Delete This Item?&quot;)"><i class="fa-solid fa-trash" style="color: rgb(191, 32, 4); border:none ;"></i> </button>
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