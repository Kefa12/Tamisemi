<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>public_workers</title>
    <img src="img/flag3.png"  width="100%" height="118px">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
               
                <div class="sidebar-brand-text mx-3">Teacher</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ URL('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                    <hr class="sidebar-divider">
                    <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress</span></a>
               <a class="nav-link" href="{{ URL('letters1') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Request</span></a>
                <a class="nav-link" href="{{ URL('transfers') }}">
                <i class="fa fa-search"></i>
                    <span>Swap teacher</span></a>
               <a class="nav-link" href="{{ URL('letters3') }}">
                <i class='fas fa-exchange-alt'></i>
                    <span>Swapping</span></a>
               <a class="nav-link" href="{{ URL('chances1') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a>
            </li>

            <!-- Divider -->
            

            <!-- Heading -->
        

          
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
        

          

            <!-- Divider -->
          

            <!-- Heading -->
          

            <!-- Nav Item - Pages Collapse Menu -->
         

            <!-- Nav Item - Charts -->
          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            
                            <!-- Dropdown - Messages -->
                           
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              
                                <!-- Counter - Alerts -->
                               
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                              
                                
                                   
                                  
                                </a>
                               
                                   
                                    <div>
                                       
                                </a>
                              
                           
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               
                                <!-- Counter - Messages -->
                             
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                               
                           
                               
                             
                               
                              
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                          
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                     
                  
						
                   
						<strong>  {{Auth::user()->name}}</strong>
                        
						<small style="font-size:15px">
                        
							<i style="color: #888;">({{ __('Teacherr') }})</i>
                            {{ __('LogOut') }}
                            </x-responsive-nav-link> 
                           </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="row g-4">
            <!-- Sale & Revenue Start -->
          
              <input type="hidden" name="w" value=""></input>
             
                    
                   

  


                    <!-- Page Heading -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ URL('letters9') }}"> <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            <a href="{{ URL('transfers') }}">Total Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        @foreach ($letters as $letter)
               @if($letter->Employee_id==Auth::user()->Employee_id && $k<1)
              <input type="hidden" name="w" value="{{++$k}}"></input>
           
                    @endif
            @endforeach
                        <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ URL('letters') }}"> <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            <a href="{{ URL('letters') }}">Onprogress Request</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $k }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        @foreach ($letters as $letter)
                         
                         @if($letter->author==Auth::user()->name)
                      <input type=hidden name='hello' value="{{$i=$i+1;}}"></input>
                         @endif
                     @endforeach
                        <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ URL('letters3') }}"> <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            <a href="{{ URL('letters3') }}">Swap pending</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $i }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class='fas fa-exchange-alt'></i>
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                        <a href="{{ URL('letters3') }}"> <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            <a href=""{{ URL('chances1') }}"">Chance Available</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $chance }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <center><div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Administrative Office</h6>
                                    <div class="dropdown no-arrow">
                                        
                                        
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
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
                    
                  </div></div>
                            </div></center>
                   
              

                    
            </div>
        </div>
    </div>
   

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>