@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{asset('table.css')}}">
@endsection
@section('title')
@endsection


@section('main')
<div class="card rounded m-3 shadow border-0">
  <div class="container m-5">
    <form action="/parent_search_data_by_name" method="GET">
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
            <a href="{{url('/add_student')}}" class="btn bg-gradient-darkblue text-light "><i class="material-icons">&#xE147;</i> <span>Add New Parent</span></a>
                    
          </div>
       <div class="card-header p-2 my-5">
            <h5 class="card-title ">@lang('messages.All_Parents')</h5>
        </div>

          <div class="table-responsive">

            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>@lang('messages.Id_number')</th>
                  <th>@lang('messages.Image')</th>
                  <th>@lang('messages. First_Name')</th>
                  <th>@lang('messages. Last_Name')</th>
                  <th>@lang('messages.Image')</th>
                  <th>@lang('messages.NIC')</th>
                  <th>@lang('messages.Occupation')</th>
                  <th>@lang('messages.Address')</th>
                  <th>@lang('messages.Mail')</th>
                  <th>@lang('messages.Phone')</th>
                  <th>@lang('messages.Action')</th>

                </tr> 
              </thead>
              <tbody>
              
              @foreach ($parents as $parent)
                <tr>
                  <td>{{$parent->id}}</td>
                  <td><img src="{{asset('storage/parentprofile'.'/'.$parent->image)}}" width="25px" class="rounded-circle "></td>
                  <td>{{$parent->first_name}}</td>
                  <td>{{$parent->last_name}}</td>
                  <td>{{$parent->gender}}</td>
                  <td>{{$parent->cin}}</td>
                  <td>{{$parent->occupation}}</td>
                  <td>{{$parent->address}}</td>
                  <td>{{$parent->email}}</td>
                  <td>{{$parent->phone}}</td>
                  <td style="padding-left: 12px;">
                    <a href="{{url ('/all_parents/edit').'/'.$parent->id }}" class="edit"  style=" margin-right:12px;">
                    <i class="fa-solid fa-pen-to-square" style="color: #042954;"></i>
                    </a>
                    <!-- <a href='#deleteModal' class="delete" data-toggle="modal">
                    <i class="fa-solid fa-trash" style="color: rgb(191, 32, 4);"></i>
                    </a>-->
                    <!-- <form action='/all_parents/destroy/{{ $parent->id }}'  method="post">
                    @csrf
                      <button style="border:none ; background-color: transparent;" type='submit'><i class="fa-solid fa-trash" style="color: rgb(191, 32, 4); border:none ;"></i> </button>
                    </form>  -->
                    <form action='/all_parents/destroy/{{ $parent->id }}'  method="post">
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
    {{--  --}}

@endsection

@section('script')
<script src="{{asset('table.js')}}"></script>
@endsection