
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>School</title>
    <link rel="shortcut icon" href="{{asset('/student/img/favicon.png')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('/student/css/style.css')}}">

    <link href="{{asset('/student/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/student/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('/student/js/jquery.min.js')}}"></script>
    <script src="{{asset('/student/js/jspdf.min.js')}}"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body data-layout="detached">
 
<div class="navbar-custom topnav-navbar topnav-navbar-dark">
    <div class="container-fluid">

        <!-- LOGO -->
        <a href="" class="topnav-logo" style = "min-width: unset;">
            <span class="topnav-logo-lg">
                <img src="{{asset('/student/img/favicon.png')}}" alt="" height="40">
            </span>
        </a>
        <ul class="list-unstyled topbar-right-menu float-right mb-0">     
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" href="/logout" role="button">
            <span>
                <span class="account-user-name">Logout</span>
                
            </span>
            </a>
        </ul>
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" href="{{route('student.stprofile')}}" role="button">
                <span class="account-user-avatar">
                    <img src="{{asset('/student/img')}}/{{session('image')}}" alt="user-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">{{session('name')}}</span>
                    <span class="account-position">Student</span>
                    
                </span>
            </a>
        </ul>
</div>
</div>
<div class="container-fluid">
<div class="wrapper">

<div class="left-side-menu left-side-menu-detached content-main">

    <div class="leftbar-user">
        <a href="javascript: void(0);">
        <img src="{{asset('/student/img')}}/{{session('image')}}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">{{session('name')}}</span>
        </a>
    </div>
  <!--- Sidemenu -->
    <ul class="metismenu side-nav side-nav-light">
        <li class="side-nav-item"><a href="{{route('student.stdash')}}" class="side-nav-link">
            <span> Dashboard </span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('student.teacher')}}" class="side-nav-link">
            <span>Teacher</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('student.routine')}}" class="side-nav-link">
            
            <span>Class Routine</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('student.subject')}}" class="side-nav-link">
            
            <span>Subject</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('student.syllabus')}}" class="side-nav-link">
            
            <span>Syllabus</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('student.notes')}}" class="side-nav-link">
            
            <span>Notes</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('student.assignment')}}" class="side-nav-link">
            
            <span>Assignments</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('student.grade')}}" class="side-nav-link">
            <span>Grades</span></a>
        </li>
        <li class="side-nav-item"><a href="{{route('student.found')}}" class="side-nav-link">
            <span>Lost & found</span></a>
        </li>
    </ul>
  <!-- End Sidebar -->
  <div class="clearfix"></div>

</div>
<!-- Left Sidebar End -->

<div class="content-page">
    <div class="content content-main">
        <div class="loadings hidden"></div>
<div class="row ">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-body">
        <h4 class="page-title">@yield('title') </h4>
      </div> 
    </div> 
  </div>
</div>

@yield('studentcontent')
</body>
</html>
