@extends('layouts.master')
@section('main')         
    <!-- ==================================================== -->
    
        <div class="container m-5">
            <form action="/parent_details_search_data_by_name" method="GET">
              
              <div class="form-group">
                <label for="SearchByName">@lang('messages.search_name') :</label>
                <input type="text" class="form-control" name="SearchByName"  id="SearchByName" placeholder="@lang('messages.placeholder_search_name')">
              </div>

              <button type="submit" class="btn btn-primary">@lang('messages.searchBtn')</button>
            </form>
         </div>
         @foreach ($parents as $parent)
         <div class="container m-5 ">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">@lang('messages.About_Me')</h5>
            </div>
            
                
           
            <div class="d-flex justify-content-around " >
                  <div class="w-100 m-5 text-center">
                    <img class="w-25 "  src="{{asset('storage/parentprofile'.'/'.$parent->image)}}" alt="" >
                    </div>
                <div class="card-body ">

                    
                    <div class="w-75 p-3">
                        
                        <span><b>@lang('messages.Bio') :</b></span><p>{{$parent->bio}}</p>
                    </div> 

                    
                    <dl class="row">

                        <dt class="col-sm-3"> @lang('messages.Id_number') :</dt>
                        <dd class="col-sm-9">{{$parent->id}}</dd>
                    
                        <dt class="col-sm-3"> @lang('messages. First_Name') :</dt>
                        <dd class="col-sm-9">{{$parent->first_name}}</dd>

                        <dt class="col-sm-3"> @lang('messages. Last_Name') :</dt>
                        <dd class="col-sm-9">{{$parent->last_name}}</dd>

                        <dt class="col-sm-3">@lang('messages.Gender') :</dt>
                        <dd class="col-sm-9">{{$parent->gender}}</dd>

                        <dt class="col-sm-3">@lang('messages.NIC') :</dt>
                        <dd class="col-sm-9">{{$parent->cin}}</dd>

                        <dt class="col-sm-3">@lang('messages.Occupation') :</dt>
                        <dd class="col-sm-9">{{$parent->occupation}}</dd>

                        <dt class="col-sm-3">@lang('messages.Address') :</dt>
                        <dd class="col-sm-9">{{$parent->address}}</dd>

                        <dt class="col-sm-3">@lang('messages.Mail') :</dt>
                        <dd class="col-sm-9">{{$parent->email}}</dd>

                        <dt class="col-sm-3">@lang('messages.Phone') :</dt>
                        <dd class="col-sm-9">{{$parent->phone}}</dd>

                    </dl>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>

</body>
</html>
@endsection