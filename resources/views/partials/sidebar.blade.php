<ul class="navbar-nav bg-gradient-darkblue sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fa-solid fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">@lang('messages.Golden_Frame') <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>@lang('messages.Dashboard')</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Student Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStudent"
            aria-expanded="true" aria-controls="collapseStudent">
            <i class="fa-solid fa-children"></i>
            <span>@lang('messages.Students')</span>
        </a>
        <div id="collapseStudent" class="collapse" aria-labelledby="headingStudent" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner ">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="{{url('/all_students')}}">@lang('messages.All_Students')</a>
                <a class="collapse-item" href="{{url('/student_details')}}">@lang('messages.Student_Details')</a>
                <a class="collapse-item" href="{{url('/add_student')}}">@lang('messages.Admission_Form')</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item Teachers - Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeacher"
            aria-expanded="true" aria-controls="collapseTeacher">
            <i class="fa-solid fa-people-line"></i>
            <span>@lang('messages.Teachers')</span>
        </a>
        <div id="collapseTeacher" class="collapse" aria-labelledby="headingTeacher"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner ">
                
                <a class="collapse-item" href="{{url('/all_teachers')}}">@lang('messages.All_Teachers')</a>
                <a class="collapse-item" href="{{url('/teacher_details')}}">@lang('messages.Teacher_Details')</a>
                <a class="collapse-item" href="{{url('/add_teacher')}}">@lang('messages.Add_Teacher')</a>
            
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Parents menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseParent"
            aria-expanded="true" aria-controls="collapseParent">
            <i class="fa-solid fa-user-group"></i>
            <span>@lang('messages.Parents')</span>
        </a>
        <div id="collapseParent" class="collapse" aria-labelledby="headingParent" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner ">
                
                <a class="collapse-item" href="{{url('/all_parents')}}">@lang('messages.All_Parents')</a>
                <a class="collapse-item" href="{{url('/parent_details')}}">@lang('messages.Parents_Details')</a>
                <a class="collapse-item" href="{{url('/add_student')}}">@lang('messages.Add_Parent')</a>
               
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
     <!-- Nav Item - library Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLibrary"
            aria-expanded="true" aria-controls="collapseLibrary">
            <i class="fa-solid fa-school"></i>
            <span>@lang('messages.Library')</span>
        </a>
        <div id="collapseLibrary" class="collapse" aria-labelledby="headingLibrary" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner ">
                
                <a class="collapse-item" href="{{url('/all_books')}}">@lang('messages.All_Books')</a>
                <a class="collapse-item" href="{{url('/add_book')}}">@lang('messages.Add_New_Book')</a>   
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
     <!-- Nav Item - levels Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLevel"
            aria-expanded="true" aria-controls="collapseLevel">
            <i class="fa-solid fa-pen-ruler"></i>
            <span>@lang('messages.levels')</span>
        </a>
        <div id="collapseLevel" class="collapse" aria-labelledby="headingLevel" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner ">
                <a class="collapse-item" href="{{url('/all_levels')}}">@lang('messages.All_levels')</a>
                <a class="collapse-item" href="{{url('/add_level')}}">@lang('messages.Add_New_Level')</a>   
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Subject -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubject"
            aria-expanded="true" aria-controls="collapseSubject">
            <i class="fa-solid fa-pen-ruler"></i>
            <span>@lang('messages.Subjects')</span>
        </a>
        <div id="collapseSubject" class="collapse" aria-labelledby="headingSubject" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner ">
                <a class="collapse-item" href="{{url('/all_subjects')}}">@lang('messages.All_Subjects')</a>
                <a class="collapse-item" href="{{url('/add_subject')}}">@lang('messages.Add_New_Subject')</a>   
            </div>
        </div>
    </li>
    


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
     
    </div>

</ul>