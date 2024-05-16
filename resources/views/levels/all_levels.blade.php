@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{asset('table.css')}}">
@endsection
@section('title')
@endsection


@section('main')

<div class="card rounded m-3 shadow border-0">
  <div class="container m-5">
    <form action="/level_search_data_by_name" method="GET">
      <div class="form-group col-sm-6">
        <label for="SearchByName">@lang('messages.search_level')</label>
        <input type="text" class="form-control" name="SearchByName"  id="SearchByName" placeholder="@lang('messages.placeholder_search_level')">
      </div>
      
      <button type="submit" class="btn btn-primary">@lang('messages.searchBtn')</button>
    </form>
 </div>
</div>


    <div class="mx-3 py-5">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">

          <div class=" d-flex flex-row-reverse pl-2">
            <a href="{{url('/add_level')}}" class="btn bg-gradient-darkblue text-light "><i class="material-icons">&#xE147;</i> <span>@lang('messages.Add_New_Level')</span></a>
                    
          </div>
          <div class="card-header p-2 my-5">
            <h5 class="card-title ">@lang('messages.All_levels')</h5>
        </div>

          <div class="table-responsive">

            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>@lang('messages.Id_number')</th>
                  <th>@lang('messages.Teacher_Name')</th>
                  <th>@lang('messages.Gender')</th>
                  <th>@lang('messages.Level')</th>
                  <th>@lang('messages.Subject')</th>
                  <th>@lang('messages.Starting_Time')</th>
                  <th>@lang('messages.End_At') </th>
                  <th>@lang('messages.Mail')</th>
                  <th>@lang('messages.Action')</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($levels as $level )
                  
                
                 <tr>
                   <td>{{$level->id}}</td>
                   <td>{{$level->teacher_name}}</td>
                   <td>{{$level->gender}}</td>
                   <td>{{$level->level}}</td>
                   <td>{{$level->subject}}</td>
                   <td>{{$level->starting_time}}</td>
                   <td>{{$level->ending_time}}</td>
                   <td>{{$level->email}}</td>
                   
                   <td style="padding-left: 12px;">
                     <a href="{{url ('/all_levels/edit').'/'.$level->id }}" class="edit"  style=" margin-right:12px;">
                     <i class="fa-solid fa-pen-to-square" style="color: #042954;"></i>
                     </a>
                     <form action='/all_levels/destroy/{{ $level->id }}'  method="post">
                     @csrf
                     @method("delete")
                       <button style="border:none ; background-color: transparent;" onclick="return confirm(&quot;Are You Sure You Want Delete This Item?&quot;)" type='submit'><i class="fa-solid fa-trash" style="color: rgb(191, 32, 4); border:none ;"></i> </button>
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