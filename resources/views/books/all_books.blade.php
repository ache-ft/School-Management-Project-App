
@extends('layouts.master')

@section('style')
<link rel="stylesheet" href="{{asset('table.css')}}">
@endsection
@section('title')
@endsection


@section('main')

    <div class="mx-3 py-5">
      <div class="card rounded shadow border-0">
       
       
         

        <div class="container m-5">
          <form action="/search_data_by_name" method="GET">
            <div class="form-group">
              <label for="SearchByName">@lang('messages.search_name'):</label>
              <input type="text" class="form-control" name="SearchByName"  id="SearchByName" placeholder="@lang('messages.placeholder_search_name')">
            </div>
            
            <button type="submit" class="btn btn-primary">@lang('messages.searchBtn')</button>
          </form>
       </div>

       
       <div class="card-body p-5 bg-white rounded ">
        <div class=" d-flex flex-row-reverse pl-2">
          <a href="{{url('/add_book')}}" class="btn bg-gradient-darkblue text-light "><i class="material-icons">&#xE147;</i> <span>@lang('messages.Add_New_Books')</span></a>
                  
        </div>

       <div class="card-header p-2 my-5 ">
        <h5 class="card-title ">@lang('messages.All_Books')</h5>
       </div>

          <div class="table-responsive">

            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>@lang('messages.Id_number')</th>
                
                  <th>@lang('messages.Book_Name')</th>
                  <th>@lang('messages.Subject')</th>
                  <th>@lang('messages.Writter_Name')</th>
                  <th>@lang('messages.Level')</th>
                  <th>@lang('messages.Publishing_Date') </th>
                  <th>@lang('messages.Creating_Date')</th>
                  <th>@lang('messages.Action')</th>

                </tr>
              </thead>
              <tbody>
               @foreach ($books as $book )
                 
               
                <tr>
                  <td>{{$book->id}}</td>
                  <td>{{$book->book_name}}</td>
                  <td>{{$book->subject}}</td>
                  <td>{{$book->writter_name}}</td>
                  <td>{{$book->Level}}</td>
                  <td>{{$book->publishing_date}}</td>
                  <td>{{$book->upload_date}}</td>
                  
                  <td style="padding-left: 12px;">
                    <a href="{{url ('/all_books/edit').'/'.$book->id }}" class="edit"  style=" margin-right:12px;">
                    <i class="fa-solid fa-pen-to-square" style="color: #042954;"></i>
                    </a>
                    <form action='/all_books/destroy/{{ $book->id }}'  method="post">
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