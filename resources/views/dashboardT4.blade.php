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

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
               
                <div class="sidebar-brand-text mx-3">Administrator</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
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

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
        

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                
                
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>REGISTER USER</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Add User:</h6>
                        <a class="collapse-item" href="{{ url('Register_Headmaster') }}">HeadMaster</a>
                        <a class="collapse-item" href="{{ url('Register_WEO') }}">Ward_Education_Officer</a>
                        <a class="collapse-item" href="{{ url('Register_DEO') }}">District_Education_Officer</a>
                        <a class="collapse-item" href="{{ url('Register_DED') }}">District_Excutive_Director</a>
                        <a class="collapse-item" href="{{ url('Register_RD') }}">Regional_Director</a>
                        <a class="collapse-item" href="{{ url('Register_TAMISEMI_Director') }}">Tamisemi_Director</a>
                    </div>
                </div>
            </li>

          

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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             
                            </a>
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
                        
							<i style="color: #888;">({{ __('Tamisemi_Director') }})</i>
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
              

      
   
  <h1 class="h3 mb-2 text-gray-800"></h1>
   
   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chance for Teacher Transfer</h6>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead>
                                       <tr> <th>No</th>
            <th>Headmaster</th>
            <th>School</th>
            <th>Disctrict</th>
            <th>Regional</th>
            <th>description</th> 
            <th>Approved_status</th> 
            <th width="280px">Action</th>
           
                                       
                                     </tr>
                                   </thead>
                                   <tfoot>
                                   <tr> 
                                       <th>No</th>
                                            <th>Headmaster</th>
                                            <th>School</th>
                                            <th>district</th>
                                                 <th>Regional</th>
                                            <th>descriptionn</th>
                                            <th>Approved_status</th>		
                                               
           
                                        <th width="280px">Action</th>
                                     </tr>
                                   </tfoot>
                                   <tbody>
   
        @foreach ($chances as $chance)
        @if($chance->school!='pending') 
           <tr>
           <td>{{ ++$i }}</td>
              <td>{{ $chance->name }}</td>
              <td>{{ $chance->school }}</td>
              <td>{{ $chance->district }}</td>
              <td>{{ $chance->regional }}</td>
              <td>{{ $chance->description }}</td>
             
               @if(  $chance->Tamisemi== 'Rejected BY Tamisemi_Director')
                
                <td> <button type="submit" class="btn btn-danger" width="280px"><i> Rejected</i></button> </td>
             
             @elseif(  $chance->Tamisemi== 'Approved BY Tamisemi_Director')
            
             <td><button type="submit" class="btn btn-primary" style="width: 180px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">Approved</i></button> </td>
            
              @else
             
              <td><button type="submit" class="btn btn-success" width="280px"><i>pending</i></button> </td>
             
             
              @endif
               <td>
               <form action="{{ route('chances.destroy', $chance->id) }}" method="POST">

                                    
                                     <input type='hidden' name="M" value="1"></input>
                                     <a href="{{route('chances.edit', $chance->id) }}">
                                     <i class="fas fa-edit  fa-lg"></i>

                                      </a>
                   

                       @csrf
                       @method('DELETE')
                       @role('admin')
                       <a href="{{ route('chances.show', $chance->id) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                       <a href="{{ route('letters.show', $letter->id) }}" title="show">
                           <i class="fas fa-eye text-success  fa-lg"></i>
                       </a>
                       <button type="submit" title="delete" style="border: none; background-color:transparent;">
                           <i class="fas fa-trash fa-lg text-danger"></i>

                       </button>
                       @endrole
                   </form>
               </td>
           </tr>
        @endif
          
       @endforeach
   </tbody>
  </table>
</div>
</div>
  

  


                    <!-- Page Heading -->
                   
              

                    
            </div>
        </div>
    </div>
    <div class="container-fluid">
              

      
   
              <h1 class="h3 mb-2 text-gray-800"></h1>
               
               <div class="card shadow mb-4">
                                   <div class="card-header py-3">
                                       <h6 class="m-0 font-weight-bold text-primary">Chance for Teacher Transfer</h6>
                                   </div>
                                   <div class="card-body">
                                       <div class="table-responsive">
                                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                               <thead>
                                                   <tr> <th>No</th>
                        <th>Doctor_in_Charge</th>
                        <th>Hospital</th>
                        <th>Disctrict</th>
                        <th>Regional</th>
                        <th>description</th> 
                        <th>Approved_status</th> 
                        <th width="280px">Action</th>
                       
                                                   
                                                 </tr>
                                               </thead>
                                               <tfoot>
                                               <tr> 
                                                   <th>No</th>
                                                        <th>Doctor_in_Charger</th>
                                                        <th>Hospital</th>
                                                        <th>district</th>
                                                             <th>Regional</th>
                                                        <th>descriptionn</th>
                                                        <th>Approved_status</th>		
                                                           
                       
                                                    <th width="280px">Action</th>
                                                 </tr>
                                               </tfoot>
                                               <tbody>
               
                    @foreach ($chances as $chance)
                      @if($chance->hospital!='pending')
                       <tr>
                       <td>{{ ++$i }}</td>
                          <td>{{ $chance->name }}</td>
                          <td>{{ $chance->hospital }}</td>
                          <td>{{ $chance->district }}</td>
                          <td>{{ $chance->regional }}</td>
                          <td>{{ $chance->description }}</td>
                         
                           @if(  $chance->Tamisemi== 'Rejected BY Tamisemi_Director')
                            
                            <td> <button type="submit" class="btn btn-danger" width="280px"><i> Rejected</i></button> </td>
                         
                         @elseif(  $chance->Tamisemi== 'Approved BY Tamisemi_Director')
                        
                         <td><button type="submit" class="btn btn-primary" style="width: 180px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">Approved</i></button> </td>
                        
                          @else
                         
                          <td><button type="submit" class="btn btn-success" width="280px"><i>pending</i></button> </td>
                         
                         
                          @endif
                           <td>
                           <form action="{{ route('chances.destroy', $chance->id) }}" method="POST">
            
                                                
                                                 <input type='hidden' name="M" value="1"></input>
                                                 <a href="{{route('chances.edit', $chance->id) }}">
                                                 <i class="fas fa-edit  fa-lg"></i>
            
                                                  </a>
                               
            
                                   @csrf
                                   @method('DELETE')
                                   @role('admin')
                                   <a href="{{ route('chances.show', $chance->id) }}" title="show">
                                    <i class="fas fa-eye text-success  fa-lg"></i>
                                    </a>
                                   <a href="{{ route('letters.show', $letter->id) }}" title="show">
                                       <i class="fas fa-eye text-success  fa-lg"></i>
                                   </a>
                                   <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                       <i class="fas fa-trash fa-lg text-danger"></i>
            
                                   </button>
                                   @endrole
                               </form>
                           </td>
                       </tr>
                       @endif
                      
                      
                   @endforeach
               </tbody>
              </table>
            </div>
            </div>
              
            
              
            
            
                                <!-- Page Heading -->
                               
                          
            
                                
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
    
      <!-- Page level plugins -->
      <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


</body>

</html>