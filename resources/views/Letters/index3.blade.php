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

<body id="page-top" style="width=100%; position:relative; top:-19px; left:-10; margin-right:-20px;">
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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"  style="position:relative; top:-16px;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
               
                @role('Teacher')
                <div class="sidebar-brand-text mx-3">Teacher</div>
                @endrole
                @role('Health_Worker')
                <div class="sidebar-brand-text mx-3">Nurse</div>
                @endrole
                @role('Medical_Doctor_in-charge')
                <div class="sidebar-brand-text mx-3">Doctor_in-charge</div>
                @endrole
                @role('Weo')
                <div class="sidebar-brand-text mx-3">Ward_officer</div>
                @endrole
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ URL('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                    @role('Teacher')
                    <hr class="sidebar-divider">
                    <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress</span></a>
                <a class="nav-link" href="{{ URL('letters21') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Result</span></a>
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
                    @role('Health_Worker')
                    <hr class="sidebar-divider">
                    <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress</span></a>
                <a class="nav-link" href="{{ URL('letters21') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Result</span></a>
               <a class="nav-link" href="{{ URL('letters1') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Request</span></a>
                <a class="nav-link" href="{{ URL('transfers') }}">
                <i class="fa fa-search"></i>
                    <span>Swap Nurse</span></a>
               <a class="nav-link" href="{{ URL('letters3') }}">
                <i class='fas fa-exchange-alt'></i>
                    <span>Swapping</span></a>
               <a class="nav-link" href="{{ URL('chances1') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a>
                    @endrole
                    @role('Headmaster')
                <a class="nav-link" href="{{ URL('letters20') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Request</span></a>
                <a class="nav-link" href="{{ URL('letters22') }}">
                <i class='fa fa-table me-2'></i>
                    <span>Teacher</span></a>
                <a class="nav-link" href="{{ URL('letters3') }}">
                <i class='fas fa-exchange-alt'></i>
                    <span>Swapping</span></a>
               <a class="nav-link" href="{{ URL('letters111') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a>
             <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress Chance</span></a>
                @endrole
                @role('Medical_Doctor_in-charge')
                <a class="nav-link" href="{{ URL('districts') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Request</span></a>
                <a class="nav-link" href="{{ URL('letters22') }}">
                <i class='fa fa-table me-2'></i>
                    <span>Nurse</span></a>
              
               <a class="nav-link" href="{{ URL('letters31') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a>
             <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress Chance</span></a>
                @endrole
                @role('DEO')
                <a class="nav-link" href="{{ route('districts.index') }}">
                <i class='fa fa-table me-2'></i>
                    <span>request</span></a>
                <a class="nav-link" href="{{ URL('letters24') }}">
                <i class='fa fa-table me-2'></i>
                    <span>Teacher</span></a>
                    <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress Chance</span></a>
               <!-- <a class="nav-link" href="{{ URL('chancess1') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a> -->
                @endrole
                @role('Regional_Director')
                    <a class="nav-link" href="{{ URL('regionals') }}">
                     <i class="fa fa-table me-2"></i>
                    <span>Request</span></a>
                    <a class="nav-link" href="{{ URL('letters25') }}">
                     <i class="fa fa-table me-2"></i>
                    <span>Teacher</span></a>
                    <a class="nav-link" href="{{ URL('letters') }}">
                    <i class="fa fa-table me-2"></i>
                    <span>Onprogress Chance</span></a>
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
                    <ul class="navbar-nav ml-auto" >

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
                          @role('Teacher')
							<i style="color: #888;">({{ __('Teacher') }})</i>
                           
                           @endrole
                           @role('Health_Worker')
							<i style="color: #888;">({{ __('Health_Worker') }})</i>
                           
                           @endrole
                           @role('Medical_Doctor_in-charge')
							<i style="color: #888;">({{ __('Doctor_in-charge') }})</i>
                           
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
        <div class="row">
        <div class="col-lg-8">
            </nav>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
               
              
                </a>
               
                <!--MESSAGE-->
                <div class="navbar-nav align-items-center ms-auto">
                     
					</div>
                    </div>
                </div>
            </nav>

         
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
           
            

        
                                
                              
        
      


        <div class="container-fluid">
                <div class="row g-4">
             
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
        <div class="content">
            <!-- Navbar Start -->
          
              
                    @role('Teacher')
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ URL('Teachdash1') }}" class="dropdown-item">My Profile</a>
                           
							<form method="POST" action="{{ route('logout') }}">
																	@csrf
                            <a href="route('logout')" class="dropdown-item" onclick="event.preventDefault();
																						this.closest('form').submit();">	{{ __('LogOut') }}</a>
                    	</form>    
					</div>
                    @endrole
                    </div>
                </div>
            </nav>

            <style>
              
                td{
                    background-color: white;
                    height:45px;
                    width:145px;
                }
              
               
              
            </style>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
           
            

          
					<h4>
					
				
					</h4>
              
   
          
               
          
           
        </div>
    </div>
 
    @role('Teacher')
    <form action="{{ route('letters.index') }}" method="GET" role="search">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <section class="vh-100" style="background-color: #f4f5f7;">

    @foreach ($letters as $letter)
            <tr style="background-color:white;">
        @if($letter->author==Auth::user()->name)
        <div class="container-fluid">

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800"></h1>
   
    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                                    <thead>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    <tbody>
              <h6>Transfer Request Details</h6>
                <hr class="mt-0 mb-10">
                <h6><b>Current_status</b></h6>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Name</h6>
                    <p class="text-muted">{{$letter->name}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>School</h6>
                    <p class="text-muted">{{$letter->cschool}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    ward:
                    <p class="text-muted">{{$letter->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$letter->cdistrict}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$letter->regional}}</p>

                    </div>
                  </div>
                  <h6><b>Request</b></h6>

                  <div class="row pt-1">
                  <div class="col-12 mb-6">
                        <h6>Reason</h6>
                         <p class="text-muted">{{$letter->description}}</p>
                     </div>
                        <div class="col-6 mb-3">
                        <h6>Regional</h6>
                         <p class="text-muted">{{$letter->tregional}}</p>
                     </div>
                    <div class="col-6 mb-3">
                        <h6>District</h6>
                         <p class="text-muted">{{$letter->tdistrict}}</p>
                     </div>
                        <div class="col-6 mb-3">
                        <h6>Ward</h6>
                         <p class="text-muted">{{$letter->tward}}</p>
                     </div>
                
                     <div class="col-6 mb-3">
                        <h6>School</h6>
                         <p class="text-muted">{{$letter->tschool}}</p>
                     </div>
                     <div class="col-6 mb-3">
                    <h6>Swap teacher</h6>
                    <p class="text-muted">{{$letter->author}}</p>
                 </div>
              
                 </div>
                 <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>Teacher</h6>
                    @if( $letter->Teacher_approved == 'Not_support BY TEACHER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Teacher_approved  == 'support BY TEACHER')
              
                 <button type="submit" class="btn btn-primary" style="height:34px;" ><i style="height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
</div>
                
                  <div class="col-6 mb-3">
                    <h6>Headmster</h6>
                    @if( $letter->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Headmaster  == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="height:34px;" ><i style="height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-2">
                    <h6>Ward_officer</h6>
                    @if( $letter->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
                 
               
                @endif
               
                
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $letter->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $letter->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Officer</h6>
                    @if( $letter->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <h6><b>Teacher_Action</b></h6>
                <hr class="mt-0 mb-4">
   
                </div>
</div>

            
              <p style="color:red;">If support,request will updated</p>
              <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">

                 
                  Support/Not_support<a href="{{ route('letters.edit', $letter->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                </a>
                  @role('Tamisemi_Director')
                  <a href="{{ route('letters.show', $letter->id) }}" title="show">
                      <i class="fas fa-eye text-success  fa-lg"></i>
                  </a>
                  <a href="{{ route('letters.edit', $letter->id) }}">
                      <i class="fas fa-edit  fa-lg"></i>

                  </a>
                  @endif
     
     
                
                  @csrf
                  @method('DELETE')
                  @role('Tamisemi_Director')
                  <button type="submit" title="delete" style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                  </button>
                  @endrole
                
              </form>

            </tbody>

</div>
          
   
           @endif 
        @endforeach

    

   
   
    @endrole
     
    @role('Health_Worker')
    <form action="{{ route('letters.index') }}" method="GET" role="search">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <section class="vh-100" style="background-color: #f4f5f7;">

    @foreach ($letters as $letter)
            <tr style="background-color:white;">
        @if($letter->author==Auth::user()->name)
        <div class="container-fluid">

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800"></h1>
   
    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                                    <thead>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    <tbody>
              <h6>Transfer Request Details</h6>
                <hr class="mt-0 mb-10">
                <h6><b>Current_status</b></h6>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Name</h6>
                    <p class="text-muted">{{$letter->name}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Hospital</h6>
                    <p class="text-muted">{{$letter->chospital}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    ward:
                    <p class="text-muted">{{$letter->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$letter->cdistrict}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$letter->regional}}</p>

                    </div>
                  </div>
                  <h6><b>Request</b></h6>

                  <div class="row pt-1">
                  <div class="col-12 mb-6">
                        <h6>Reason</h6>
                         <p class="text-muted">{{$letter->description}}</p>
                     </div>
                        <div class="col-6 mb-3">
                        <h6>Regional</h6>
                         <p class="text-muted">{{$letter->tregional}}</p>
                     </div>
                    <div class="col-6 mb-3">
                        <h6>District</h6>
                         <p class="text-muted">{{$letter->tdistrict}}</p>
                     </div>
                        <div class="col-6 mb-3">
                        <h6>Ward</h6>
                         <p class="text-muted">{{$letter->tward}}</p>
                     </div>
                
                     <div class="col-6 mb-3">
                        <h6>Hospital</h6>
                         <p class="text-muted">{{$letter->thospital}}</p>
                     </div>
                     <div class="col-6 mb-3">
                    <h6>Swap Nurse</h6>
                    <p class="text-muted">{{$letter->author}}</p>
                 </div>
              
                 </div>
                 <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>Nurse</h6>
                    @if( $letter->Health_approved == 'Not_support BY nurse')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Health_approved  == 'support BY nurse')
              
                 <button type="submit" class="btn btn-primary" style="height:34px;" ><i style="height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
</div>
                
                  <div class="col-6 mb-3">
                    <h6>Medical_Doctor_in_Charge</h6>
                    @if( $letter->MDC_approved == 'Not_support BY MDC')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->MDC_approved  == 'support BY MDC')
              
                 <button type="submit" class="btn btn-primary" style="height:34px;" ><i style="height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-2">
                    <h6>Ward_officer</h6>
                    @if( $letter->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
                 
               
                @endif
               
                
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $letter->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $letter->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Officer</h6>
                    @if( $letter->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <h6><b>Teacher_Action</b></h6>
                <hr class="mt-0 mb-4">
   
                </div>
</div>

            
              <p style="color:red;">If support,request will updated</p>
              <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">

                 
                  Support/Not_support<a href="{{ route('letters.edit', $letter->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                </a>
                  @role('Tamisemi_Director')
                  <a href="{{ route('letters.show', $letter->id) }}" title="show">
                      <i class="fas fa-eye text-success  fa-lg"></i>
                  </a>
                  <a href="{{ route('letters.edit', $letter->id) }}">
                      <i class="fas fa-edit  fa-lg"></i>

                  </a>
                  @endif
     
     
                
                  @csrf
                  @method('DELETE')
                  @role('Tamisemi_Director')
                  <button type="submit" title="delete" style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                  </button>
                  @endrole
                
              </form>

            </tbody>

</div>
          
   
           @endif 
        @endforeach

    

   
   
    @endrole

    @role('Medical_Doctor_in-charge')
   


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <h1 class="h3 mb-2 text-gray-800"></h1>
   
   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Search other request</h6>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead>
                                       <tr>
            <th>No</th>
            <th>Name</th>
            <th>current Hospital</th>
            <th>Transfer Hospital</th>
            <th>current disctrict</th>
            <th>transfer district</th>
            <th>description</th>
            <th>Message from Nurse</th>
            <th>Nurse Name</th>
            <th>Nurse_Action</th>
            <th>Doctor_in_charge_Action</th>
           
            
            <th width="280px">Action</th>
        </tr>
        </thead>
                                    <tfoot>
                                    <tr>
            <th>No</th>
            <th>Name</th>
            <th>current Hospital</th>
            <th>Transfer Hospital</th>
            <th>current disctrict</th>
            <th>transfer district</th>
            <th>description</th>
            <th>Message from Nurse</th>
            <th>Nurse Name</th>
            <th>Nurse_Action</th>
            <th>Doctor_in_charge_Action</th>
           
            
            <th width="280px">Action</th>
        </tr>
                            </tfoot>
                            <tbody>
      
    @foreach ($letters as $letter)
            <tr style="background-color:white;">
        @if($letter->thospital==Auth::user()->hospital && $letter->author!='unknown')
          
            
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->chospital }}</td>
                <td>{{ $letter->thospital }}</td>
                <td>{{ $letter->cdistrict }}</td>
                <td>{{ $letter->tdistrict }}</td>
                <td>{{ $letter->description }}</td>
                <td>{{ $letter->Message }} from {{ $letter->author }}</td>
                <td>{{ $letter->author }}</td>
                @if( $letter->Nurse_approved == 'Not_support BY nurse')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->Nurse_approved == 'support BY nurse')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
                @if( $letter->Transfer_Headmaster == 'Not_support BY HEADMASTER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->Transfer_Headmaster == 'support BY HEADMASTER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
               
               
               
                
                
                <td>
              
                    <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">

                        <a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                     
                        <a href="{{ route('letters.edit', $letter->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>
                      
           
        @endif 
        

                      
                        @csrf
                        @method('DELETE')
                        @role('Tamisemi_Director')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                        @endrole
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
  </div>
</div>
</div>
</div>
</div>
</section>

    @endrole
    @role('Headmaster')
   


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <h1 class="h3 mb-2 text-gray-800"></h1>
   
   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Search other request</h6>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead>
                                       <tr>
            <th>No</th>
            <th>Name</th>
            <th>current school</th>
            <th>Transfer school</th>
            <th>current disctrict</th>
            <th>transfer district</th>
            <th>description</th>
            <th>Message from Teacher</th>
            <th>Teacher Name</th>
            <th>Teacher_Action</th>
   
        </tr>
        </thead>
                                    <tfoot>
                                    <tr>
            <th>No</th>
            <th>Name</th>
            <th>current school</th>
            <th>Transfer school</th>
            <th>current disctrict</th>
            <th>transfer district</th>
            <th>description</th>
            <th>Message from Teacher</th>
            <th>Teacher Name</th>
            <th>Teacher_Action</th>
         
           
            
          
        </tr>
                            </tfoot>
                            <tbody>
      
    @foreach ($letters as $letter)
            <tr style="background-color:white;">
        @if($letter->tschool==Auth::user()->schools && $letter->author!='unknown')
          
            
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->cschool }}</td>
                <td>{{ $letter->tschool }}</td>
                <td>{{ $letter->cdistrict }}</td>
                <td>{{ $letter->tdistrict }}</td>
                <td>{{ $letter->description }}</td>
                <td>{{ $letter->Message }} from {{ $letter->author }}</td>
                <td>{{ $letter->author }}</td>
                @if( $letter->Teacher_approved == 'Not_support BY TEACHER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->Teacher_approved == 'support BY TEACHER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
           
               
               
               
                
                
                <td>
                    @role('admin')
              
                    <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">

                        <a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                     
                        <a href="{{ route('letters.edit', $letter->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>
                    @endrole
                      
           
        @endif 
        

                      
                        @csrf
                        @method('DELETE')
                        @role('Tamisemi_Director')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                        @endrole
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
  </div>
</div>
</div>
</div>
</div>
</section>

    @endrole




  



				</div>
			</div>
               
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
    
      <!-- Page level plugins -->
      <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>