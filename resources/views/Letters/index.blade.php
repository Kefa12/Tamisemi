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
                @role('Headmaster')
                <div class="sidebar-brand-text mx-3">Headmaster</div>
                @endrole
                @role('Health_Worker')
                <div class="sidebar-brand-text mx-3">Nurse</div>
                @endrole
                @role('Weo')
                <div class="sidebar-brand-text mx-3">Ward_officer</div>
                @endrole
                @role('Medical_Doctor_in-Charge')
                <div class="sidebar-brand-text mx-3">Doctor_in_Charge</div>
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
                <i class='fas fa-exchange-alt'></i>
                    <span>Teacher</span></a>
                <a class="nav-link" href="{{ URL('letters3') }}">
                <i class='fas fa-exchange-alt'></i>
                    <span>Swapping</span></a>
               <a class="nav-link" href="{{ URL('letters1') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a>
             <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress Chance</span></a>
                @endrole
                @role('Medical_Doctor_in-Charge')
                <a class="nav-link" href="{{ URL('letters20') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Request</span></a>
                <a class="nav-link" href="{{ URL('letters22') }}">
                <i class='fas fa-exchange-alt'></i>
                    <span>Nurse</span></a>
                
               <a class="nav-link" href="{{ URL('letters1') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a>
             <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress Chance</span></a>
                @endrole
                @role('Weo')
                <a class="nav-link" href="{{ route('wards.index') }}">
                <i class='fa fa-table me-2'></i>
                    <span>request</span></a>
                <a class="nav-link" href="{{ URL('letters23') }}">
                <i class='fa fa-table me-2'></i>
                    <span>Teacher</span></a>
                    <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress Chance</span></a>
                <!-- <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a> -->
               <!-- <a class="nav-link" href="{{ URL('chancess1') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a> -->
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
                @role('DED')
                <a class="nav-link" href="{{ route('districts.index') }}">
                <i class='fa fa-table me-2'></i>
                    <span>request</span></a>
                <a class="nav-link" href="{{ URL('letters24') }}">
                <i class='fa fa-table me-2'></i>
                    <span>public_workers</span></a>
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
                    <span>public_workers</span></a>
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
                @role('DMO')
                <a class="nav-link" href="{{ route('districts.index') }}">
                <i class='fa fa-table me-2'></i>
                    <span>request</span></a>
                <a class="nav-link" href="{{ URL('letters24') }}">
                <i class='fa fa-table me-2'></i>
                    <span>Nurse</span></a>
                    <a class="nav-link" href="{{ URL('letters') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Onprogress Chance</span></a>
               <!-- <a class="nav-link" href="{{ URL('chancess1') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Chance</span></a> -->
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
							<i style="color: #888;">({{ __('Doctor_in_Charge') }})</i>
                           
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

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>

    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Request Onprogress</h6>
                        </div>
    @role('Teacher')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                                    <thead>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    <tbody>
    <form action="{{ route('letters.index') }}" method="GET" role="search">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <section class="vh-100" style="background-color: ;">
    
         @foreach ($letters as $letter)
 @if(($letter->Tamisemi !="Approved BY Tamisemi_Director"))
  @if($letter->author=="unknown" && $letter->name==Auth::user()->name && $letter->Employee_id==Auth::user()->Employee_id)
  

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
                  <div class="col-12 mb-6">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$letter->regional}}</p>

                    </div>
                  </div>
                  <h6><b>Request</b></h6>

                  <div class="row pt-1">
                  <div class="col-6 mb-3">
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
                  
              
                 </div>
                 <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Headmaster</h6>
                    @if( $letter->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Headmaster  == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="height:34px;" ><i style="height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
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
                    <h6>Regional_Director</h6>
                    @if( $letter->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
            
                  <div class="col-6 mb-3">
                  <a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                    </div>
                    
  
                
          
                
       </div>
     
                
                  @csrf
                  @method('DELETE')
                  @role('Tamisemi_Director')
                  <h6><b>Teacher_Action</b></h6>
                <hr class="mt-0 mb-4">
                   
              
              <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">

              
                
                  Support/No_support<a href="{{ route('letters.edit', $letter->id) }}">
    <i class="fas fa-edit  fa-lg"></i>

</a>
             

                  </button>
                  @endrole
                
              </form>
              <form action="{{ URL('DEL') }}" method="GET">
                  <input type='hidden' name="del" value="{{ $letter->id}}"/>
                  <input type='hidden' name="author" value="{{ $letter->author}}"/>
                  <input type='hidden' name="name" value="{{ $letter->name}}"/>
                  <input type='hidden' name="Employee_id" value="{{ $letter->Employee_id}}"/>
                  <input type='hidden' name="regional" value="{{ $letter->regional}}"/>
                  <input type='hidden' name="cdistrict" value="{{ $letter->cdistrict}}"/>
                  <input type='hidden' name="cschool" value="{{ $letter->cschool}}"/>
                  <input type='hidden' name="tdistrict" value="{{ $letter->tdistrict}}"/>
                  <input type='hidden' name="tschool" value="{{ $letter->tschool}}"/>
                  <button type="submit" title="delete" style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                  </button>
                  </form>
              
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
      </tbody>  
    </table>
    </div>
                                </div>
                            </div>
    <br/>
    @role('Tamisemi_Director')
    <center><h4>RESPOND  TIME</h4></center>
    <table  class="table table-striped w-auto">
      
    <tr style="border: none; color:black;">
                  <th>Description</th>
                  <th>Respond time</th>
            </tr>
              <tr>
                  <th>Lifetime request</th>
                  <td>{{ abs(round((strtotime($date2)-strtotime($letter->created_at))/86400)) }}</td>
            </tr>
            <tr>
                  <th>Headmaster</th>
                  @if($letter->Headmaster=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->T_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>Ward_officer</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>District_officer</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>District_Director</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>Regional_officer</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
              </tr>
              <th>
               
                 
                
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>

    </table>
    </form>
    @endrole
          
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
       
 @elseif($letter->name==Auth::user()->name && $letter->Employee_id==Auth::user()->Employee_id )
     @foreach ($letters as $letter)
          
           
            @if(($letter->name==Auth::user()->name || !(Auth::user()->hasRole(['Teacher'])))) 
         
           
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
                  <div class="col-6 mb-3">
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
                        <h6>swapping with</h6>
                         <p class="text-muted">{{$letter->author}}</p>
                     </div>
              
                 </div>
                 <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-8">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Teacher</h6>
                    @if( $letter->Teacher_approved == 'Not_support BY TEACHER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Teacher_approved  == 'support BY TEACHER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Headmaster</h6>
                    @if( $letter->Transfer_Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Transfer_Headmaster == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="" ><i style="">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
</div>
                <div class="col-6 mb-3">
                    <h6>Current_Headmaster</h6>
                    @if( $letter->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Headmaster == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
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
                    <h6>Regional_Director</h6>
                    @if( $letter->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
            <div class="col-12 mb-6">
                <p>Time Taken To Respond</p>  <a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                    </div>
            @csrf
             @method('DELETE')
          
                  </div>
                </div>
               
                  </div>
                  
                  </div>
                </div>
                </center>
           
              
              <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">
              @csrf
               
                 
                    
              </form>
              
                  @role('Tamisemi_Director')
                  <a href="{{ route('letters.edit', $letter->id) }}">
                      <i class="fas fa-edit  fa-lg"></i>

                  </a>
                  @endif
     
     
                
                  @csrf
                
                  @role('Tamisemi_Director')
                  <button type="submit" title="delete" style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                  </button>
                  @endrole
                  <form action="{{ URL('DEL') }}" method="GET">
                  <input type='hidden' name="del" value="{{ $letter->id}}"/>
                  <input type='hidden' name="author" value="{{ $letter->author}}"/>
                  <input type='hidden' name="id" value="{{ $letter->id}}"/>
                  <input type='hidden' name="name" value="{{ $letter->name}}"/>
                  <input type='hidden' name="Employee_id" value="{{ $letter->Employee_id}}"/>
                  <input type='hidden' name="regional" value="{{ $letter->regional}}"/>
                  <input type='hidden' name="cdistrict" value="{{ $letter->cdistrict}}"/>
                  <input type='hidden' name="cschool" value="{{ $letter->cschool}}"/>
                  <input type='hidden' name="tdistrict" value="{{ $letter->tdistrict}}"/>
                  <input type='hidden' name="tschool" value="{{ $letter->tschool}}"/>
                  <button type="submit" title="delete" style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                  </button>
                  </form>
                  
                
              </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
   

    </form>
</div>
          
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
    
           @endif 
        @endforeach

    @else
      
 
    @endif
    @else
    
     @if(($letter->name==Auth::user()->name))
      
     <h1><span style="color:blue"><h1>
     @endif
@endif
 @endforeach

@endrole
@role('Health_Worker')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                                    <thead>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    <tbody>
    <form action="{{ route('letters.index') }}" method="GET" role="search">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <section class="vh-100" style="background-color: ;">
    
         @foreach ($letters as $letter)
 @if(($letter->Tamisemi !="Approved BY Tamisemi_Director"))
  @if($letter->author=="unknown" && $letter->name==Auth::user()->name && $letter->Employee_id==Auth::user()->Employee_id)
  

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
                  <div class="col-12 mb-6">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$letter->regional}}</p>

                    </div>
                  </div>
                  <h6><b>Request</b></h6>

                  <div class="row pt-1">
                  <div class="col-6 mb-3">
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
                         <p class="text-muted">{{$letter->thospital}}</p>
                     </div>
                  
              
                 </div>
                 <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
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
                  
                  
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_Medical_officer</h6>
               @if( $letter->DMO == 'Not_support BY DMO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->DMO == 'support BY DMO')
              
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
                    <h6>Regional_Director</h6>
                    @if( $letter->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
            
                  <div class="col-6 mb-3">
                  <a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                    </div>
                    
  
                
          
                
       </div>
     
                
                  @csrf
                  @method('DELETE')
                  @role('Tamisemi_Director')
                  <h6><b>Teacher_Action</b></h6>
                <hr class="mt-0 mb-4">
                   
              
              <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">

              
                
                  Support/No_support<a href="{{ route('letters.edit', $letter->id) }}">
    <i class="fas fa-edit  fa-lg"></i>

</a>
                  <button type="submit" title="delete" style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                  </button>
                  @endrole
                
              </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
      </tbody>  
    </table>
    </div>
                                </div>
                            </div>
    <br/>
    @role('Tamisemi_Director')
    <center><h4>RESPOND  TIME</h4></center>
    <table  class="table table-striped w-auto">
      
    <tr style="border: none; color:black;">
                  <th>Description</th>
                  <th>Respond time</th>
            </tr>
              <tr>
                  <th>Lifetime request</th>
                  <td>{{ abs(round((strtotime($date2)-strtotime($letter->created_at))/86400)) }}</td>
            </tr>
            <tr>
                  <th>Headmaster</th>
                  @if($letter->Headmaster=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->T_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>Ward_officer</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>District_officer</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>District_Director</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>Regional_officer</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
              </tr>
              <th>
               
                 
                
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>

    </table>
    </form>
    @endrole
          
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
       
 @elseif($letter->name==Auth::user()->name && $letter->Employee_id==Auth::user()->Employee_id )
     @foreach ($letters as $letter)
          
           
            @if(($letter->name==Auth::user()->name || !(Auth::user()->hasRole(['Health_Worker'])))) 
         
           
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
                  <div class="col-6 mb-3">
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
                        <h6>swapping with</h6>
                         <p class="text-muted">{{$letter->author}}</p>
                     </div>
              
                 </div>
                 <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-8">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Nurse</h6>
                    @if( $letter->Health_approved == 'Not_support BY nurse')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Health_approved  == 'support BY nurse')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Medical_Doctor_in_Charge</h6>
                    @if( $letter->MDC_approved == 'Not_support BY MDC')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->MDC_approved == 'support BY MDC')
              
                 <button type="submit" class="btn btn-primary" style="" ><i style="">support</i></button>
              
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
                    <h6>Regional_Director</h6>
                    @if( $letter->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
            <div class="col-12 mb-6">
                <p>Time Taken To Respond</p>  <a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                    </div>
            @csrf
             @method('DELETE')
          
                  </div>
                </div>
               
                  </div>
                  
                  </div>
                </div>
                </center>
           
              
              <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">
              @csrf
               
                   <button type="submit" title="Delete"  style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                    </button>
                    
              </form>
              
                  @role('Tamisemi_Director')
                  <a href="{{ route('letters.edit', $letter->id) }}">
                      <i class="fas fa-edit  fa-lg"></i>

                  </a>
                  @endif
     
     
                
                  @csrf
                
                  @role('Tamisemi_Director')
                  <button type="submit" title="delete" style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                  </button>
                  @endrole
                  
                
              </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
   

    </form>
</div>
          
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
    
           @endif 
        @endforeach

    @else
      
 
    @endif
    @else
    
     @if(($letter->name==Auth::user()->name))
      
     <h1><span style="color:blue">Congratration!</span> Successfully transfer request<h1>
     @endif
@endif
 @endforeach

@endrole
@role('Medical_Doctor_in-charge')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                                    <thead>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    <tbody>
    <form action="{{ route('letters.index') }}" method="GET" role="search">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <section class="vh-100" style="background-color: ;">
    
         @foreach ($letters as $letter)
 @if(($letter->Tamisemi !="Approved BY Tamisemi_Director"))
 
 @role('Medical_Doctor_in-charge')
 @foreach ($chances as $chance)
          
           
          @if(($chance->hospital==Auth::user()->hospital)) 

              <h6>Chance Request Details</h6>
                <hr class="mt-0 mb-10">
                <h6><b>Current_status</b></h6>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Name</h6>
                    <p class="text-muted">{{$chance->name}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Hospital</h6>
                    <p class="text-muted">{{$chance->hospital}}</p>
                  </div>
                
                  <div class="col-6 mb-3">
                    ward:
                    <p class="text-muted">{{$chance->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$chance->district}}</p>
                  </div>
                  <div class="col-12 mb-6">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$chance->regional}}</p>

                    </div>
                  </div>
                 

                  <div class="row pt-1">
                  <div class="col-6 mb-3">
                        <h6>Reason</h6>
                         <p class="text-muted">{{$chance->description}}</p>
                     </div>
                       
                  
              
                 </div>
                 <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Medical_Doctor_in_Charge</h6>
                    @if( $letter->MDC == 'Not_support BY MDC')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->MDC  == 'support BY MDC')
              
                 <button type="submit" class="btn btn-primary" style="height:34px;" ><i style="height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_Medical_officer</h6>
                    @if( $letter->DMO == 'Not_support BY DMO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->DMO == 'support BY DMO')
              
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
                    <h6>Regional_Director</h6>
                    @if( $letter->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
            
                  <div class="col-6 mb-3">
                  <a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                    </div>
  
                
          
                
       </div>
       @endif
@endforeach
@endrole

@role('DMO')


 @foreach ($chances as $chance)
          
           
          @if(($chance->district==Auth::user()->district)) 

              <h6>Chance Request Details</h6>
                <hr class="mt-0 mb-10">
                <h6><b>Current_status</b></h6>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Name</h6>
                    <p class="text-muted">{{$chance->name}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Hospital</h6>
                    <p class="text-muted">{{$chance->hospital}}</p>
                  </div>
                
                  <div class="col-6 mb-3">
                    ward:
                    <p class="text-muted">{{$chance->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$chance->district}}</p>
                  </div>
                  <div class="col-12 mb-6">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$chance->regional}}</p>

                    </div>
                  </div>
                 

                  <div class="row pt-1">
                  <div class="col-6 mb-3">
                        <h6>Reason</h6>
                         <p class="text-muted">{{$chance->description}}</p>
                     </div>
                       
                  
              
                 </div>
                 <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Medical_Doctor_in_Charge</h6>
                    @if( $letter->MDC == 'Not_support BY MDC')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->MDC  == 'support BY MDC')
              
                 <button type="submit" class="btn btn-primary" style="height:34px;" ><i style="height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_Medical_officer</h6>
                    @if( $letter->DMO == 'Not_support BY DMO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->DMO == 'support BY DMO')
              
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
                    <h6>Regional_Director</h6>
                    @if( $letter->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
            
                  <div class="col-6 mb-3">
                  <a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                    </div>
  
                
        
                
       </div>
       @endif
@endforeach


     
                
                  @csrf
                  @method('DELETE')
                  @role('Tamisemi_Director')
                  <h6><b>Teacher_Action</b></h6>
                <hr class="mt-0 mb-4">
                   
              
              <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">

              
                
                  Support/No_support<a href="{{ route('letters.edit', $letter->id) }}">
    <i class="fas fa-edit  fa-lg"></i>

</a>
                  <button type="submit" title="delete" style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                  </button>
                  @endrole
                
              </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
      </tbody>  
    </table>
    </div>
                                </div>
                            </div>
    <br/>
    @role('Tamisemi_Director')
    <center><h4>RESPOND  TIME</h4></center>
    <table  class="table table-striped w-auto">
      
    <tr style="border: none; color:black;">
                  <th>Description</th>
                  <th>Respond time</th>
            </tr>
              <tr>
                  <th>Lifetime request</th>
                  <td>{{ abs(round((strtotime($date2)-strtotime($letter->created_at))/86400)) }}</td>
            </tr>
            <tr>
                  <th>Headmaster</th>
                  @if($letter->Headmaster=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->T_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>Ward_officer</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>District_officer</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>District_Director</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>Regional_officer</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
              </tr>
              <th>
               
                 
                
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>

    </table>
    </form>
    @endrole
          
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
       
 @elseif($letter->name==Auth::user()->name && $letter->Employee_id==Auth::user()->Employee_id )
     @foreach ($letters as $letter)
          
           
            @if(($letter->name==Auth::user()->name || !(Auth::user()->hasRole(['Health_Worker'])))) 
         
           
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
                  <div class="col-6 mb-3">
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
                        <h6>swapping with</h6>
                         <p class="text-muted">{{$letter->author}}</p>
                     </div>
              
                 </div>
                 <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-8">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Nurse</h6>
                    @if( $letter->Health_approved == 'Not_support BY nurse')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Health_approved  == 'support BY nurse')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Medical_Doctor_in_Charge</h6>
                    @if( $letter->Transfer_Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Transfer_Headmaster == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="" ><i style="">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
</div>
                <div class="col-6 mb-3">
                    <h6>Current_Medical_Doctor_in_Charge</h6>
                    @if( $letter->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Headmaster == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_Medical_officer</h6>
                    @if( $letter->DMO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->DMO == 'support BY District_Education_Officer')
              
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
                    <h6>Regional_Director</h6>
                    @if( $letter->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
            <div class="col-12 mb-6">
                <p>Time Taken To Respond</p>  <a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                    </div>
            @csrf
             @method('DELETE')
          
                  </div>
                </div>
               
                  </div>
                  
                  </div>
                </div>
                </center>
           
              
              <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">
              @csrf
               
                   <button type="submit" title="Delete"  style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                    </button>
                    
              </form>
              
                  @role('Tamisemi_Director')
                  <a href="{{ route('letters.edit', $letter->id) }}">
                      <i class="fas fa-edit  fa-lg"></i>

                  </a>
                  @endif
     
     
                
                  @csrf
                
                  @role('Tamisemi_Director')
                  <button type="submit" title="delete" style="border: none; background-color:transparent;">
                      <i class="fas fa-trash fa-lg text-danger"></i>

                  </button>
                  @endrole
                  
                
              </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
   

    </form>
</div>
          
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
    
           @endif 
        @endforeach

    @else
      
 
    @endif
    @else
    
     @if(($letter->name==Auth::user()->name))
      
     <h1><span style="color:blue">Congratration!</span> Successfully transfer request<h1>
     @endif
@endif
 @endforeach

@endrole
 @role('Headmaster')
 @foreach ($chances as $chance)
          
           
          @if(($chance->school==Auth::user()->schools)) 
        
                                    <h6 class="m-0 font-weight-bold text-primary">chance request Details</h6>
                               
            <h6></h6>
              <hr class="mt-0 mb-10">
              <div class="row pt-1">
                <div class="col-6 mb-3">
                  <h6>Name</h6>
                  <p class="text-muted">{{$chance->name}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Position</h6>
                  <p class="text-muted">{{$chance->position}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>School</h6>
                  <p class="text-muted">{{$chance->school}}</p>
                </div>
                <div class="col-6 mb-3">
                  ward:
                  <p class="text-muted">{{$chance->ward}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>District</h6>
                  <p class="text-muted">{{$chance->district}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Regional</h6>
                  <p class="text-muted">{{$chance->regional}}</p>

                  </div>
                </div>
                
                  <h6>Number of Teacher.</h6>
                  <p class="text-muted">{{$chance->amount1}}</p>
                  <h6>Amount need.</h6>
                  <p class="text-muted">{{$chance->amount}}</p>

                 
                
              

                <div class="row pt-1">
                <div class="col-12 mb-6">
                      <h6>Reason</h6>
                       <p class="text-muted">{{$chance->description}}</p>
                   </div>
                   <div class="col-12 mb-6">
                   <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-8">
                
                  
                  
        
                  <div class="col-12 mb-6">
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                </div>
               
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
              
                  
            
  </div>
              
          @role('Tamisemi_Director')
            <form action="{{ route(' $chances.destroy', $chance->id) }}" method="POST">
            
            
              
                <a href="{{ route('letters.edit', $letter->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>
                @endif
 @endrole
 
                
 </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
   

    </table>
    </form>
          
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
  
        @endforeach

        @endrole
        @role('Tamisemi_Director')
 @foreach ($chances as $chance)
          
           
        
       
          <div class="col-md-12">
            <div class="card-body p-4">
            <h6>chance request Details</h6>
              <hr class="mt-0 mb-10">
              <div class="row pt-1">
                <div class="col-6 mb-3">
                  <h6>Name</h6>
                  <p class="text-muted">{{$chance->name}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Position</h6>
                  <p class="text-muted">{{$chance->position}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>School</h6>
                  <p class="text-muted">{{$chance->school}}</p>
                </div>
                <div class="col-6 mb-3">
                  ward:
                  <p class="text-muted">{{$chance->ward}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>District</h6>
                  <p class="text-muted">{{$chance->district}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Regional</h6>
                  <p class="text-muted">{{$chance->regional}}</p>

                  </div>
                </div>
              

                <div class="row pt-1">
                <div class="col-6 mb-3">
                      <h6>Reason</h6>
                       <p class="text-muted">{{$chance->description}}</p>
                   </div>
                   <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-8">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                
                
                  </div>
                  
        
                  <div class="col-12 mb-6">
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
              
                  
            
  </div>
              
  @role('Tamisemi_Dir')
            <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">
            
            
               
                <a href="{{ route('letters.edit', $letter->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>
             
 @endrole
 
                
 </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
   

    </table>
    </form>
          
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

  
        @endforeach

        @endrole
        @role('Weo')
 @foreach ($chances as $chance)
          
           
          @if(($chance->ward==Auth::user()->ward)) 
        
                                    <h6 class="m-0 font-weight-bold text-primary">chance request Details</h6>
                               
            <h6></h6>
              <hr class="mt-0 mb-10">
              <div class="row pt-1">
                <div class="col-6 mb-3">
                  <h6>Name</h6>
                  <p class="text-muted">{{$chance->name}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Position</h6>
                  <p class="text-muted">{{$chance->position}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>School</h6>
                  <p class="text-muted">{{$chance->school}}</p>
                </div>
                <div class="col-6 mb-3">
                  ward:
                  <p class="text-muted">{{$chance->ward}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>District</h6>
                  <p class="text-muted">{{$chance->district}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Regional</h6>
                  <p class="text-muted">{{$chance->regional}}</p>

                  </div>
                </div>
              

                <div class="row pt-1">
                <div class="col-6 mb-3">
                      <h6>Reason</h6>
                       <p class="text-muted">{{$chance->description}}</p>
                   </div>
                   <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-8">
                
                  
        
                  <div class="col-12 mb-6">
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
              
                  
            
  </div>
              
            
            <form action="{{ route('chances.destroy', $chance->id) }}" method="POST">
            
            
              
                <a href="{{ route('chances.edit', $chance->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>
               
 @endrole
 
                
 </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
   

    </table>
    </form>
          
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
  
        @endforeach

        @endrole
        @role('DEO')
 @foreach ($chances as $chance)
          
           
          @if(($chance->district==Auth::user()->district)) 
        
                                    <h6 class="m-0 font-weight-bold text-primary">chance request Details</h6>
                               
            <h6></h6>
              <hr class="mt-0 mb-10">
              <div class="row pt-1">
                <div class="col-6 mb-3">
                  <h6>Name</h6>
                  <p class="text-muted">{{$chance->name}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Position</h6>
                  <p class="text-muted">{{$chance->position}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>School</h6>
                  <p class="text-muted">{{$chance->school}}</p>
                </div>
                <div class="col-6 mb-3">
                  ward:
                  <p class="text-muted">{{$chance->ward}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>District</h6>
                  <p class="text-muted">{{$chance->district}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Regional</h6>
                  <p class="text-muted">{{$chance->regional}}</p>

                  </div>
                </div>
              

                <div class="row pt-1">
                <div class="col-6 mb-3">
                      <h6>Reason</h6>
                       <p class="text-muted">{{$chance->description}}</p>
                   </div>
                   <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-8">
                
                  
        
                  <div class="col-12 mb-6">
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
              
                  
            
  </div>
              <p>Ward Officer Action</p>
            
            <form action="{{ route('chances.destroy', $chance->id) }}" method="POST">
            
            
              
                <a href="{{ route('chances.edit', $chance->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>
               
 @endrole
 
                
 </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
   

    </table>
    </form>
          
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
  
        @endforeach

        @endrole
        @role('DED')
        @foreach ($chances as $chance)
          
           
          @if(($chance->district==Auth::user()->district)) 
        
                                    <h6 class="m-0 font-weight-bold text-primary">chance request Details</h6>
                               
            <h6></h6>
              <hr class="mt-0 mb-10">
              <div class="row pt-1">
                <div class="col-6 mb-3">
                  <h6>Name</h6>
                  <p class="text-muted">{{$chance->name}}</p>
                </div>
                <div class="col-6 mb-3">
                <h6>Position</h6>
                  @if($chance->school!='pending')
                  <h6>Headmaster</h6>
                  @else
                  <h6>Doctor</h6>
                  @endif
                </div>
                <div class="col-6 mb-3">
                 
                  @if($chance->school!='pending')
                  <h6>School</h6>
                  <p class="text-muted">{{$chance->school}}</p>
                  @else
                  <h6>Hospital</h6>
                  <p class="text-muted">{{$chance->hospital}}</p>
                  @endif
                </div>
                <div class="col-6 mb-3">
                  ward:
                  <p class="text-muted">{{$chance->ward}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>District</h6>
                  <p class="text-muted">{{$chance->district}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Regional</h6>
                  <p class="text-muted">{{$chance->regional}}</p>

                  </div>
                </div>
              

                <div class="row pt-1">
                <div class="col-6 mb-3">
                      <h6>Reason</h6>
                       <p class="text-muted">{{$chance->description}}</p>
                   </div>
                   <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-8">
                
                  
                @if($chance->school!='pending')
                  <div class="col-12 mb-6">
                    
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                @endif
                
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
              
                  
            
  </div>
              <p>District_Director Action</p>
            
            <form action="{{ route('chances.destroy', $chance->id) }}" method="POST">
            
            
              
                <a href="{{ route('chances.edit', $chance->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>
               
 @endrole
 
                
 </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
   

    </table>
    </form>
          
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
  
        @endforeach

        @endrole
      @role('DMO')
        @foreach ($chances as $chance)
          
           
          @if(($chance->regional==Auth::user()->regional)) 
        
                                    <h6 class="m-0 font-weight-bold text-primary">chance request Details</h6>
                               
            <h6></h6>
              <hr class="mt-0 mb-10">
              <div class="row pt-1">
                <div class="col-6 mb-3">
                  <h6>Name</h6>
                  <p class="text-muted">{{$chance->name}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Position</h6>
                  <p class="text-muted">Doctor</p>
                </div>
                <div class="col-6 mb-3">
                @if($chance->school!='pending')
                  <h6>School</h6>
                  <p class="text-muted">{{$chance->school}}</p>
                  @else
                  <h6>Hospital</h6>
                  <p class="text-muted">{{$chance->hospital}}</p>
                  @endif
                </div>
                <div class="col-6 mb-3">
                  ward:
                  <p class="text-muted">{{$chance->ward}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>District</h6>
                  <p class="text-muted">{{$chance->district}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Regional</h6>
                  <p class="text-muted">{{$chance->regional}}</p>

                  </div>
                </div>
              

                <div class="row pt-1">
                <div class="col-6 mb-3">
                      <h6>Reason</h6>
                       <p class="text-muted">{{$chance->description}}</p>
                   </div>
                   <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-8">
                
                  
        
                  
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DMO == 'Not_support BY DMO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DMO == 'support BY DMO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->RD== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->RD == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
              
                  
            
  </div>
              <p>District_officer Action</p>
            
            <form action="{{ route('chances.destroy', $chance->id) }}" method="POST">
            
            
              
                <a href="{{ route('chances.edit', $chance->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>
               
 @endrole
 
                
 </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
   

    </table>
    </form>
          
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
  
        @endforeach

        @endrole
        @role('Regional_Director')
        @foreach ($chances as $chance)
          
           
          @if(($chance->regional==Auth::user()->regional)) 
        
                                    <h6 class="m-0 font-weight-bold text-primary">chance request Details</h6>
                               
            <h6></h6>
              <hr class="mt-0 mb-10">
              <div class="row pt-1">
                <div class="col-6 mb-3">
                  <h6>Name</h6>
                  <p class="text-muted">{{$chance->name}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Position</h6>
                  @if($chance->school!='pending')
                    <h6>Headmaster</h6>
                   
                    @else
                    <h6>Doctor</h6>
                   
                    @endif
                </div>
                <div class="col-6 mb-3">
                @if($chance->school!='pending')
                    <h6>School</h6>
                    <p class="text-muted">{{$chance->school}}</p>
                    @else
                    <h6>Hospital</h6>
                    <p class="text-muted">{{$chance->hospital}}</p>
                    @endif
                </div>
           
                <div class="col-6 mb-3">         
                  ward:
                  <p class="text-muted">{{$chance->ward}}</p>
               
                  
                </div>
            
                <div class="col-6 mb-3">
                  <h6>District</h6>
                  <p class="text-muted">{{$chance->district}}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Regional</h6>
                  <p class="text-muted">{{$chance->regional}}</p>

                  </div>
                </div>
              

                <div class="row pt-1">
                <div class="col-6 mb-3">
                      <h6>Reason</h6>
                       <p class="text-muted">{{$chance->description}}</p>
                   </div>
                   <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-8">
                
                  
        
                @if($chance->school!='pending')  
                <div class="col-12 mb-6">
      
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
      @endif
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->RD== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->RD == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
              
                  
            
  </div>
              <p>Regional_Director Action</p>
            
            <form action="{{ route('chances.destroy', $chance->id) }}" method="POST">
            
            
              
                <a href="{{ route('chances.edit', $chance->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>
               
 @endrole
 
                
 </form>
          </td>
       </tr>
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
   

    </table>
    </form>
          
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
  
        @endforeach

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

 
    <!-- JavaScript Libraries -->
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