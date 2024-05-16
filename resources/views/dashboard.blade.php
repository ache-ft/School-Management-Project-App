@extends('layouts.master')
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="{{asset('css/all-student.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">


</head>
<body>
<div class="px-4">
<h1>@lang('messages.Dashboard')</h1>

 <!-- Content Row -->

<div class="row">
     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            @lang('messages.STUDENTS')</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $students }}</div>
                    </div>
                    <div class="col-auto">
                    <i class="flaticon-classmates text-green"></i>
                        <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                        <div><img src="{{asset('img/back-to-school.png')}}" width="40" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            @lang('messages.TEACHERS')</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $teachers }}</div>
                    </div>
                    <div class="col-auto">
                        <div><img src="{{asset('img/group.png')}}" width="40" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            @lang('messages.PARENTS')</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $parents }}</div>
                    </div>
                    <div class="col-auto">
                    <i class="flaticon-classmates text-green"></i>
                        <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                        <div><img src="{{asset('img/couple.png')}}" width="40" alt=""></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            @lang('messages.EARNING')</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$189,018</div>
                    </div>
                    <div class="col-auto">
                        <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
                        <div><img src="{{asset('img/money-stack.png')}}" width="40" alt=""></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<div class="row">

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-dark">@lang('messages.Earnings_Overview')</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    {{-- <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> --}}
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- =============================================================================================== -->
<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-dark">@lang('messages.Students')</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="myPieChart"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> @lang('messages.Male_Students ')
                </span>
                
                <span class="mr-2">
                    <i class="fas fa-circle text-warning text-primary"></i> @lang('messages.Female_Students')
                </span>
            </div>
        </div>
    </div>
</div>
</div>
<!-- -------------------------------------------------------------------------------------------------- -->

<div class="container">
  <div class="row">
    <div class="col-md-3 mb-3">
      <div class="card">
        <div class="card-body text-center color-social-facebook">
        
          <p class="card-text"><i class="fa-brands fa-facebook px-2"></i>@lang('messages.Facebook')</p>
          <h5 class="card-title">10,000</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <div class="card-body text-center color-social-twitter">
          
          <p class="card-text"><i class="fa-brands fa-twitter px-2"></i>@lang('messages.Twitter')</p>
          <h5 class="card-title">11,000</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3  mb-3">
      <div class="card ">
        <div class="card-body text-center color-social-googleplus">
        
          <p class="card-text"><i class="fa-brands fa-google-plus-g px-2"></i>@lang('messages.Google')</p>
          <h5 class="card-title">19,000</h5>
          
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card">
        <div class="card-body text-center color-social-linkden">
        
        <p class="card-text"><i class="fa-brands fa-linkedin-in px-2"></i>@lang('messages.LinkedIn')</p>
        <h5 class="card-title">45,000</h5>
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>



@endsection 

@section('script')
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
let males = {!! json_encode($maleStudents) !!};
let females = {!! json_encode($femaleStudents) !!};
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [" Male Students ", "Female Students"],
    datasets: [{
      data: [males, females],
      backgroundColor: ['#417dfc', '#ffa601'],
      hoverBackgroundColor: ['#417dfc', '#ffa601'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 70,
  },
});

    </script>
@endsection