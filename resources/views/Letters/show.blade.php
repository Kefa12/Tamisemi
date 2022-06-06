<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
	<style>
	
	</style>

    <!-- Favicon -->
    <link href="../asset4/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../asset4/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../asset4/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../asset4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../asset4/css/style.css" rel="stylesheet">
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
                @role('Headmaster')
                <h3 class="text-primary"> Headmaster </h3>
                @endrole
                @role('Teacher')
                    <h3 class="text-primary"> Teacher </h3>
                @endrole
                @role('Weo')
                    <h3 class="text-primary"> Ward_Officer</h3>
                @endrole
                @role('DEO')
                    <h3 class="text-primary"> District_Officer</h3>
                @endrole
                @role('DED')
                    <h3 class="text-primary"> District_Director</h3>
                @endrole
                @role('Regional_Director')
                    <h3 class="text-primary"> Regional_Director</h3>
                @endrole
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

                <div class="navbar-nav w-100">
                    <a href="{{ URL('dashboard') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                  
                    @role('Headmaster')
                    <a href="{{ URL('schools') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Onprogress Request</a>
                    <a href="{{ URL('letters3') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Request From Teacher</a>
                    @endrole
                    @role('Weo')
                    <a href="{{ URL('wards') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Onprogress Request</a>
                    
                    @endrole
                    @role('DEO')
                    <a href="{{ URL('districts') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Onprogress Request</a>
                    
                    @endrole
                    @role('DED')
                    <a href="{{ URL('districts') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Onprogress Request</a>
                    
                    @endrole
                    @role('Regional_Director')
                    <a href="{{ URL('regionals') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Onprogress Request</a>
                    
                    @endrole

                </div>
                   
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
                      
                       
                    </div>
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../asset4/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            @role('Teacher')
                            <span class="d-none d-lg-inline-flex">{{ __('Teacher') }}({{Auth::user()->name}})</span>
                            @endrole
                            @role('Weo')
                            <span class="d-none d-lg-inline-flex">{{ __('WEO') }}({{Auth::user()->name}})</span>
                            @endrole
                            @role('DEO')
                            <span class="d-none d-lg-inline-flex">{{ __('DEO') }}({{Auth::user()->name}})</span>
                            @endrole
                            @role('DED')
                            <span class="d-none d-lg-inline-flex">{{ __('DED') }}({{Auth::user()->name}})</span>
                            @endrole
                            @role('Regional_Director')
                            <span class="d-none d-lg-inline-flex">{{ __('Regional_Director') }}({{Auth::user()->name}})</span>
                            @endrole
                            @role('Tamisemi_Director')
                            <span class="d-none d-lg-inline-flex">{{ __('Administrator') }}({{Auth::user()->name}})</span>
                            @endrole
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                           
							<form method="POST" action="{{ route('logout') }}">
																	@csrf
                            <a href="route('logout')" class="dropdown-item" onclick="event.preventDefault();
																						this.closest('form').submit();">	{{ __('LogOut') }}</a>
                    	</form>    
					</div>
                    </div>
                </div>
            </nav>

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
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
           
            

           
            

<body bgcolor="white">
<p>LIFE TIME FOR REQUEST CREATED BY {{$letter->name}} is {{ abs(round((strtotime($date2)-strtotime($letter->created_at))/86400)) }}  days</p>
                  

<center> <table class="table table-striped">
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
                  <td>RED RESPOND TIME TAKEN</td>
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
</center>
</div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset4/lib/chart/chart.min.js"></script>
    <script src="../asset4/lib/easing/easing.min.js"></script>
    <script src="../asset4/lib/waypoints/waypoints.min.js"></script>
    <script src="../asset4/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../asset4/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../asset4/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../asset4/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../asset4/js/main.js"></script>
</body>

</html>