{{-- @extends('layouts.master')
@section('main')

<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>All <b>Students</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
										
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						
                        <th></th>
                        <th>Roll</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Parents</th>
                        <th>Address</th>
                        <th>Date Of Birth</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>#0021</td>
                        <td>student</td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>      
                        <td>Jack Sparrow</td>
                        <td>TA-107 Newyork</td>
                        <td>02/05/2001</td>
                        <td>+123 9988568</td>
                        <td>kazifahim93@gmail.com</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons"  data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
              
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
	
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection  --}}  
<!-- ============================================================================== -->




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
      <div class="form-group">
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
            <a href="{{url('/add_student')}}" class="btn bg-gradient-darkblue text-light "><i class="material-icons">&#xE147;</i> <span>@lang('messages.Add_New_Student')</span></a>
                    
          </div>

          <div class="card-header p-2 my-5">
            <h5 class="card-title ">@lang('messages.All_Students')</h5>
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
                  <th>@lang('messages. Parent')</th>
                  <th>@lang('messages.Date_of_birth')</th>
                  <th>@lang('messages.Address')</th>
                  <th>@lang('messages.Mail')</th>
                  <th>@lang('messages.Phone')</th>
                  <th>@lang('messages.Level')</th>

                  <th>@lang('messages.Action')</th>

                </tr>
              </thead>
              <tbody>
               
              
              @foreach ($students as $student)
                <tr>
                  <td>{{$student->admission_id}}</td>
                  <td><img src="{{asset('storage/studentprofile'.'/'.$student->image)}}" width="25px" class="rounded-circle "></td>
                  <td>{{$student->first_name}}</td>
                  <td>{{$student->last_name}}</td>
                  <td>{{$student->gender}}</td>
                  <td>{{$student->family->first_name }} {{ $student->family->last_name }}</td>
                  <td>{{$student->date_of_birth}}</td>
                  <td>{{$student->address}}</td>
                  <td>{{$student->email}}</td>
                  <td>{{$student->phone}}</td>
                  <td>{{$student->level}}</td>
                  <td style="padding-left: 12px;">
                    <a href="{{url ('/all_students/edit').'/'.$student->id }}" class="edit"  style=" margin-right:12px;">
                    <i class="fa-solid fa-pen-to-square" style="color: #042954;"></i>
                    </a>
                    <form action='/all_students/destroy/{{ $student->id }}'  method="post">
                    @csrf
                    @method("delete")
                      <button style="border:none ; background-color: transparent;" type='submit'><i class="fa-solid fa-trash" style="color: rgb(191, 32, 4); border:none ;" onclick="return confirm(&quot;Are you sure you want to delete this item?&quot;)"></i> </button>
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