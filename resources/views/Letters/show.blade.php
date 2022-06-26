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
    <img src="../img/flag3.png"  width="100%" height="118px" style="margin-bottom:-20px;">
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
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


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
               
                @role('Teacher')
                <div class="sidebar-brand-text mx-3">Teacher</div>
                @endrole
                @role('Weo')
                <div class="sidebar-brand-text mx-3">Ward_officer</div>
                @endrole
                @role('Headmaster')
                <div class="sidebar-brand-text mx-3"> Headmaster </div>
                @endrole
                @role('DEO')
                <div class="sidebar-brand-text mx-3">District_Officer</div>
                @endrole
                @role('DED')
                <div class="sidebar-brand-text mx-3"> District_Director</div>
                @endrole
                @role('Regional_Director')
                <div class="sidebar-brand-text mx-3"> Regional_Director</div>
                @endrole
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ URL('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                    @role('Tamisemi_Director')
                    <li class="nav-item active">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    
                    <hr class="sidebar-divider">
                    <a class="nav-link" href="{{ url('letters9') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress</span></a>
               <a class="nav-link" href="{{ url('letters10') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Complete</span></a>
                <a class="nav-link" href="{{ url('letters11') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a>
            </li>

                    @endrole
                    @role('Teacher')
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
                    @endrole
                    @role('Headmaster')
                    <hr class="sidebar-divider">
                    <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a>
                    <hr class="sidebar-divider">
                    <a class="nav-link" href="{{ URL('letters3') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Swapping</span></a>
                    @endrole
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
                                    src="../img/undraw_profile.svg">
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
                          @role('Teacher')
							<i style="color: #888;">({{ __('Teacher') }})</i>
                           
                           @endrole
                           @role('Headmaster')
							<i style="color: #888;">({{ __('Headmaster') }})</i>
                          @endrole
                            {{ __('LogOut') }}
                          
                            </x-responsive-nav-link> 
                           </form>
                         
                            </div>
                        </li>

                    </ul>

                </nav>
        <!-- Sidebar End -->


        <!-- Content Start -->
       
        <!-- Sidebar End -->


        <!-- Content Start -->
       
               
              
               
                <!--MESSAGE-->
               
        <!-- Sidebar End -->


        <!-- Content Start -->
     
               
                <!--MESSAGE-->
  

            <style>
              
                td{
                    background-color: white;
                    height:45px;
                    width:145px;
                }
               
               
                h1{
                    padding-left:50px;
                }
            </style>

        <!-- Sidebar Start -->
        
               
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

                
                   
          
        <!-- Sidebar End -->


        <!-- Content Start -->
     
            <!-- Navbar Start -->
          
         
            </nav>

           
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
           
 <div class="container-fluid">  

           
            

            <h1 class="h3 mb-2 text-gray-800"></h1>
   
   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Search other request</h6>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
<p>LIFE TIME FOR REQUEST CREATED BY {{$letter->name}} is {{ abs(round((strtotime($date2)-strtotime($letter->created_at))/86400)) }}  days</p>
                  

 <table class="table table-striped">
<tr>
              <th>
   
           
               Position
          
                  </th>
                  <th>
                           
                     Approved Status
                       </th>
                       <th>
                           
                     Time Taken To Respond To Request
                       </th>
                       <th>
                           
                     Comments
                       </th>
                  <td>
         
               
      
                  </td>
              </tr>

      
    
              <tr>
                 
            </tr>
            <tr>
                  <td>HEADMASTER RESPOND TIME TAKEN</td>
                  @if($letter->Headmaster=='pending')
                  <td>not respond</td>
                  @else
                  <td>{{$letter->Headmaster}}</td>
                  @endif
                  @if($letter->Headmaster=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->T_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
                  @if($letter->H_comment!='no_comment')
                  <td>{{$letter->H_comment}}</td>
                  @endif
                 
            </tr>
            <tr>
                  <td>WEO RESPOND TIME TAKEN</td>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>{{$letter->WEO}}</td>
                  @endif
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
                  @if($letter->W_comment!='no_comment')
                  <td>{{$letter->W_comment}}</td>
                  @endif
            </tr>
            <tr>
                  <td>DEO RESPOND TIME TAKEN</td>
                  @if($letter->DEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>{{$letter->DEO}}</td>
                  @endif
                  @if($letter->DEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->DEO_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
                  @if($letter->DEO_comment!='no_comment')
                  <td>{{$letter->DEO_comment}}</td>
                  @endif
            </tr>
            <tr>
                  <td>DED RESPOND TIME TAKEN</td>
                  @if($letter->DED=='pending')
                  <td>not respond</td>
                  @else
                  <td>{{$letter->DED}}</td>
                  @endif
                  @if($letter->DED=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->DED_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
                  @if($letter->DED_comment!='no_comment')
                  <td>{{$letter->DED_comment}}</td>
                  @endif
            </tr>
            <tr>
                  <td>RD RESPOND TIME TAKEN</td>
                  @if($letter->Regional_Director=='pending')
                  <td>not respond</td>
                  @else
                  <td>{{$letter->Regional_Director}}</td>
                  @endif
                  @if($letter->Regional_Director=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->created_at)-strtotime($letter->RD_date))/86400)) }}</td>
                  @endif
                  @if($letter->RD_comment!='no_comment')
                  <td>{{$letter->RD_comment}}</td>
                  @endif
              </tr>
              <th>
               
                 
                
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>

 

        
    </table>
 </div>
            </div>

        <!-- Content End -->


        <!-- Back to Top -->
  </div>

  
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

  

   

</body>

</html>