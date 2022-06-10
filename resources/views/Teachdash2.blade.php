<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Teacher Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <img src="img/Tamisemi1.png" width="100%" height="50px"></img>
	<style>
	
	</style>

    <!-- Favicon -->
    <link href="asset4/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="asset4/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="asset4/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="asset4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="asset4/css/style.css" rel="stylesheet">
  
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"> Teacher </h3>
                </a>
                <!-- no 
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                
                </div>
                -->
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">         
                <div class="navbar-nav w-100">
                    <a href="{{ URL('dashboard') }}"  class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2" style="color:white;"></i>Dashboard</a>
                   
                 
                    <a href="{{ URL('transfers') }}" class="nav-item nav-link"><i class="fa fa-search" aria-hidden="true"></i>Swap teacher</a>
                    <a href="{{ URL('letters1') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Request</a>
                    <a href="{{ URL('letters') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Onprogress</a>
                    <a href="{{ URL('letters3') }}" class="nav-item nav-link"><i class='fas fa-exchange-alt'></i>Swapping</a>
                   
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
               
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
               
                <!--MESSAGE-->
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                       
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                  
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                  
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                   
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                       
                        
                        
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="asset4/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ __('Teacher') }}({{Auth::user()->name}})</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ URL('Teachdash1') }}" class="dropdown-item">My Profile</a>
                           
							<form method="POST" action="{{ route('logout') }}">
																	@csrf
                            <a href="route('logout')" class="dropdown-item" onclick="event.preventDefault();
																						this.closest('form').submit();">	{{ __('LogOut') }}</a>
                    	</form>    
					</div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
            <!-- Sale & Revenue Start -->
            @foreach ($letters as $letter)
               @if($letter->Employee_id==Auth::user()->Employee_id && $k<1)
              <input type="hidden" name="w" value="{{++$k}}"></input>
           
                    @endif
            @endforeach
            @foreach ($letters as $letter)
               @if($letter->Employee_id==Auth::user()->Employee_id && $letter->Tamisemi=="Approved BY Tamisemi_Director")
              <input type="hidden" name="s" value="{{++$s}}"></input>
           
                    @endif
            @endforeach
            @if($s>0)
            <marquee><h1><span style="color:blue">Congratrualion!</span> success to transfer from MBEYA TO dar es salaam </hi></marquee>

            @endif
           

            
                         
                        @if($letter->Employee_id==Auth::user()->Employee_id && $k<0)
          
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-file fa-3x text-primary"></i>
                            <a href="{{ URL('letters') }}" style="text-decoration: none; color:black;"><div class="ms-3">
                                <p class="mb-2">Request progress</p>
                                <h6 class="mb-0">{{$k}}</h6>
                            </div></a>
                        </div>
                    </div>
                    @else
                  
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-file fa-3x text-primary"></i>
                            <a href="{{ URL('letters') }}" style="text-decoration: none; color:black;"><div class="ms-3">
                                <p class="mb-2">Request progress</p>
                                <h6 class="mb-0">{{$k}}</h6>
                            </div></a>
                        </div>
                    </div>
                 
                    @endif
                 
                 
                    <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                         <i class="fa fa-file fa-3x text-primary "></i>
                           <a href="{{ URL('transfers') }}" style="text-decoration: none; color:black;"><div class="ms-3">
                            <p class="mb-2">Total Requests</p>
                                <h6 class="mb-0">{{$data}}</h6>
                            </div></a>
                        </div>
                    </div>
                 
                    @foreach ($letters as $letter)
                         
                        @if($letter->author==Auth::user()->name)
                     <input type=hidden name='hello' value="{{$i=$i+1;}}"></input>
                        @endif
                    @endforeach
               
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-file fa-3x text-primary "></i>
                            <a href="{{ URL('letters3') }}" style="text-decoration: none; color:black;"><div class="ms-3">
                              <p class="mb-2">Swap pending</p>
                                <h6 class="mb-0">{{$i}}</h6>
                            </div></a>
                        </div>
                    </div>
                </div>
              
             
         
            </div>
            <hr>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" />
     <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');*{margin: 0;padding: 0;box-sizing: border-box;list-style: none;font-family: 'Montserrat', sans-serif}body{padding: 10px}.topnav{background-color: #ffff;overflow: hidden}.far.fa-user-circle{font-size: 29px;color: #726f6f;padding-top: 10px}.input-10{width: 40px;color: #4c4c96;font-weight: 600}.fas.fa-search{display: flex;flex-direction: column;align-items: center;justify-content: center;background-color: lightsalmon;height: 100%}.topnav a{float: left;display: block;color: #8d8b8b;font-weight: 800;font-size: 14px;text-transform: uppercase;padding: 14px 16px;text-decoration: none;border-bottom: 3px solid transparent}.topnav a:hover{color: black;border-bottom: 3px solid red}.topnav .active{color: black;border-bottom: 3px solid red}form.example input[type=text]{padding: 10px;font-size: 17px;border: 1px solid grey;float: left;width: 90%;height: 36px;background: #fff}form.example input[type=text]:focus{outline: none}form.example button{float: left;width: 10%;height: 36px;padding: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;background: #4c4c96;color: white;font-size: 14px;border: 1px solid grey;border-left: none;cursor: pointer}.navbar-toggler:focus{box-shadow: none;outline: none;border: none}::placeholder{font-size: 10px}form.example button:hover{background: #0b7dda}form.example::after{content: "";clear: both;display: table}.container .table-responsive{margin: 20px auto;overflow-x: auto}.container .table-responsive::-webkit-scrollbar{height: 5px}.container .table-responsive::-webkit-scrollbar-thumb{border-radius: 5px;background-image: linear-gradient(to right, #5D7ECD, #0C91E6)}.table thead tr th{font-size: 11px;color: #868585;padding: 10px 10px}.table tbody tr td{font-size: 13.5px;padding: 10px 10px}#navbar{width: 20%;background-color: #21214e !important;height: 50px;border: none}.bg-blight{color: #7f7fee;font-weight: 600}.bg-bdark{color: #4c4c96;font-weight: 600}#navbar a{color: white}.fas.fa-bars{color: white}#navbar2{width: 80%}#navbar-items{width: 20%;height: 500px;background-color: #4f4f8a}ul#navbar-items li{color: #b6b5b5;padding: 15px 25px;font-weight: 600;text-transform: uppercase;font-size: 10px;display: flex;align-items: center}ul li .fas{font-size: 16px}ul#navbar-items li:hover{background-color: #21214e;color: white}ul li:hover .fas{color: #f7910c}#topnavbar{width: 80%}.fs13{font-size: 13px}.fs14{font-size: 18px;color: white}.fas.fa-times{color: red}.fas.fa-check{color: greenyellow}.example{width: 50%}@media(max-width:780px){#navbar{width: 20%}#topnavbar{width: 80%}.text-decoration-none.fs14{font-size: 10px}.text-decoration-none .fs13{font-size: 9px}}@media(max-width:430px){#navbar-items, #topnavbar{width: 100%;height: 100%}#navbar-items{padding: 20px;margin-bottom: 30px}.topnav a{font-size: 12px;padding: 12px}#navbar{width: 100%;background-color: blue}.example{width: 100%}.text-decoration-none.fs14{font-size: 14px}.text-decoration-none .fs13{font-size: 13px}}@media(max-width:376px){#navbar-items{padding: 20px;margin-bottom: 30px}.topnav a{font-size: 12px;padding: 7px}}@media(max-width:320px){.topnav a{font-size: 10px;padding: 4px}}
    .gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));


/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style> 

    <div class="pull-left">
    @role('Teacher')
    <form action="{{ route('letters.index') }}" method="GET" role="search">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <section class="vh-100" style="background-color: #f4f5f7;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0" style="width:800;">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
 
            <tr>
      
         
        <div class="col-md-16">
              <div class="card-body p-8" >
              <center><h6>ADMINISTRATIVE</h6></center>
          
               
                <div class="row pt-1" style="margin-bottom:200px;">
                  <div class="col-6 mb-3">
                    <h6>Headmaster:</h6>
                    <p class="text-muted"></p>
                  </div>
                  <div class="col-6 mb-3">
                  @foreach ($schools as $school)
            <tr><input type="hidden" name="h1" value="{{$m=0}}"></input>
                  @if((Auth::user()->schools==$school->name) &&($m<1))
                  <input type="hidden" name="h1" value="{{$m++}}"></input>
                
                   <h6>{{$school->Headmaster}}</h6> 
                   @break
                 
                  @endif
                  @endforeach<br>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Ward_Officer:</h6>
                    <p class="text-muted"></p>
                  </div>
                  <div class="col-6 mb-3">
                  @foreach ($wards as $ward)
            <tr><input type="hidden" name="h1" value="{{$m=0}}"></input>
                  @if((Auth::user()->ward==$ward->name) &&($m<1))
                  <input type="hidden" name="h1" value="{{$m++}}"></input>
                
                   <h6>{{$ward->WEO}}</h6> 
                   @break
                 
                  @endif
                  @endforeach<br>
                  </div>
                  <div class="col-6 mb-6">
                   <h6>District_Officer:</h6>
                    <p class="text-muted"></p>
                  </div>
                  <div class="col-6 mb-3">
                  @foreach ($districts as $district)
            <tr><input type="hidden" name="h1" value="{{$m=0}}"></input>
                  @if((Auth::user()->district==$district->name) &&($m<1))
                  <input type="hidden" name="h1" value="{{$m++}}"></input>
                
                   <h6>{{$district->DEO}}</h6> 
                   @break
                 
                  @endif
                  @endforeach<br>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                  
                  </div>
                  <div class="col-6 mb-3">
                  @foreach ($districts as $district)
            <tr><input type="hidden" name="h1" value="{{$m=0}}"></input>
                  @if((Auth::user()->district==$district->name) &&($m<1))
                  <input type="hidden" name="h1" value="{{$m++}}"></input>
                
                   <h6>{{$district->DED}}</h6> 
                   @break
                 
                  @endif
                  @endforeach<br>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                 

                    </div>
                    <div class="col-6 mb-3">
                  @foreach ($regionals as $regional)
            <tr><input type="hidden" name="h1" value="{{$m=0}}"></input>
                  @if((Auth::user()->regional==$regional->name) &&($m<1))
                  <input type="hidden" name="h1" value="{{$m++}}"></input>
                
                   <h6>{{$regional->RD}}</h6> 
                   @break
                 
                  @endif
                  @endforeach<br>
                  </div>
                   
                    <div class="col-6 mb-3">
                    <p class="text-muted"></p>

                    </div>
                    
                  </div>

                  
                 
   

    

   
   
    @endrole
	     
               
            <!-- Recent Sales End -->


            <!-- Widgets Start
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">To Do List</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex mb-2">
                                <input class="form-control bg-transparent" type="text" placeholder="Enter task">
                                <button type="button" class="btn btn-primary ms-2">Add</button>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Short task goes here...</del></span>
                                        <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           End -->


            <!-- Footer Start -->
         
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
   </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="asset4/lib/chart/chart.min.js"></script>
    <script src="asset4/lib/easing/easing.min.js"></script>
    <script src="asset4/lib/waypoints/waypoints.min.js"></script>
    <script src="asset4/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="asset4/lib/tempusdominus/js/moment.min.js"></script>
    <script src="asset4/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="asset4/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="asset4/js/main.js"></script>
</body>

</html>