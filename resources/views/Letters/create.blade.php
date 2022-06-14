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
               
                @role('Teacher')
                <div class="sidebar-brand-text mx-3">Teacher</div>
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
                <a class="nav-link" href="{{ URL('letters20') }}">
                <i class="fa fa-table me-2"></i>
                    <span>Request</span></a>
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
<!-- Spinner End -->


<!-- Sidebar Start -->
<div class="container-fluid">
<div class="row g-4">
            </nav>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
               
              
                </a>
               
                <!--MESSAGE-->
                <div class="navbar-nav align-items-center ms-auto">
                    
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
                    
                    </div>
                </div>
            </nav>

            <style>
                .form1{
                    margin-left:20px;
                   margin-top:0px;
                  
                   width:300px;
                }
                h5{
                   
                }
                select{
                    padding-left:20px;
                }
            </style>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
         
            

        
				



    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @role('Teacher')
    <center> <div class="form1">
   <form action="{{ route('letters.store') }}" method="POST"  id="form1">
        @csrf
     
        <div>
        <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">
  
    <input type="hidden" name="name" class="form-control" placeholder="Name" value="{{ Auth::user()->name }}">
</div>
<div class="form-group">
  
    <input type="hidden" name="Employee_id" class="form-control" placeholder="Name" value="{{ Auth::user()->Employee_id }}">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <input type="hidden" class="form-control" name="cschool1" value="{{ Auth::user()->schools }}"
        placeholder="Current_school"></input>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <input type="hidden" class="form-control" style="height:50px" name="ward1" value="{{ Auth::user()->ward }}"
        placeholder="Current_school"></textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <input type="hidden" name="cdistrict" class="form-control" placeholder="iringa" value="{{ Auth::user()->district }}">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
  
    <input type="hidden" name="regional" class="form-control" value="{{ Auth::user()->regional }}">
</div>
</div>



<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
 
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="Headmaster" class="form-control" placeholder="request">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="WEO" class="form-control" placeholder="request"></input>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="DEO" class="form-control" placeholder="request">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="DED" class="form-control" placeholder="request">
</div>
</div>
<div class="card shadow mb-4">
                                
                                <div class="card-body">
                                    <div class="text-center">

                <center><h4>TRANSFER REQUEST</h4>
                <img src="assets/img/letter.png" alt="no image" width=56 height=56></center>
              <div class="form-group">
												                                              <h5 class="text-info  mb-4">Choose Regional
																							 <select id="state" name="tregional" class="form-control" style="width:250px;">
																										  <option width="50px"><h1 class="form-control">Choose Regional</h1></option>
																												  @foreach($regional_rd as $row)
																										 <option value={{$row->id}}>{{$row->name}}</option>
																													@endforeach   
																							  </select></h5>
												   </div> 
													<div class="form-group">
																										  <h5 class="text-info  mb-4">Choose District
																											   <select  id="city" name="tdistrict"  style="width:250px;" class="form-control" disabled >
																													<option  width="100px">City List</option>
																											   </select></h5>
																					</div>
																				<div class="form-group">
																						   <h5 class="text-info  mb-4">Choose Ward
																							 <select  id="stadium"  name="tward"  style="width:250px;"  class="form-control" disabled>
																							 </select></h5>
																				  </div>
																	<div class="form-group">
																									   <h5 class="text-info  mb-4">Choose school
																												<select  id="details" name="tschool"  style="width:250px;" class="form-control" disabled>
																												</select></h5>
																	</div>
																							   </div>
                                                                                               <div class="form-group">
           
                                                                                <h5 class="text-info  mb-4">
                                                                                    
                                                                                        <strong>Reason For Transfer:</strong>
                                                                                        <input type="text"  style="width:250px;" name="description" class="form-control" placeholder="request">
                                                                                    
                                                                                   
                                                                                
          

           
                                                                                    <h5 class="text-info  mb-4">
               <center> <button type="submit" style="width:120px;" class="btn btn-primary">Submit</button></center>
            </div>
            </h5>
            </div>
        </div>

    </form>
</div>
</div>
                            </div>
            </center>
    @endrole
    @role('Headmaster')
    <center> <div class="form1">
   <form action="{{ route('chances.store') }}" method="POST"  id="form1">
        @csrf
     
        <div>
        <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">
  
    <input type="hidden" name="name" class="form-control" placeholder="Name" value="{{ Auth::user()->name }}">
</div>
<div class="form-group">
  
    <input type="hidden" name="position" class="form-control" placeholder="Name" value="Headmaster">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <input type="hidden" class="form-control" name="school" value="{{ Auth::user()->schools }}"
        placeholder="Current_school"></input>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <input type="hidden" class="form-control" style="height:50px" name="ward" value="{{ Auth::user()->ward }}"
        placeholder="Current_school"></textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <input type="hidden" name="district" class="form-control" placeholder="iringa" value="{{ Auth::user()->district }}">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
  
    <input type="hidden" name="regional" class="form-control" value="{{ Auth::user()->regional }}">
</div>
</div>



<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
 
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="Headmaster" class="form-control" placeholder="request">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="WEO" class="form-control" placeholder="request"></input>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="DEO" class="form-control" placeholder="request">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="DED" class="form-control" placeholder="request">
</div>
</div>
<div class="card shadow mb-4">
                                
                                <div class="card-body">
                                    <div class="text-center">

                <center><h4>Request Add Teacher</h4>
                <img src="assets/img/letter.png" alt="no image" width=56 height=56></center>
              <div class="form-group">
												                                            
                                                                                <h5 class="text-info  mb-4">
                                                                                    
                                                                                        <strong>Reason:</strong>
                                                                                        <input type="text"  style="width:250px;" name="description" class="form-control" placeholder="request">
                                                                                    
                                                                                   
                                                                                
          

           
                                                                                    <h5 class="text-info  mb-4">
               <center> <button type="submit" style="width:120px;" class="btn btn-primary">Submit</button></center>
            </div>
            </h5>
            </div>
        </div>

    </form>
</div>
            </center>
            </div>
        </div>    
    @endrole



<script>
    // Get City List 
    $(document).ready(function(){
        $('#state').change(function(){
           var state = $('#state').val();
           $('#city').html('');
           $('#stadium').html('');
           $('#details').html('')
            $.ajax({
              url:'getCity/{id}',
              type:'GET',
              data:{myID:state},
              dataType: "json",
              success:function(data)
              {
               
                $.each(data, function(key, city)
                 {     
                  // alert(city.city_name)
                  $('#city').prop('disabled', false).css('background','aliceblue').append('<option value="'+city.id+'">'+city.name+'</option>');
                });
              }
          });
        });
      });
    
      // Get STADIUM and ADDRESS by CITY
    
      $(document).ready(function(){
        $('#city').change(function(){
           var city = $('#city').val();
           $('#stadium').html('');
           $('#details').html('');
           $.ajax({
              url:'getStadiumDetail/{id}',
              type:'GET',
              data:{id:city},
              dataType: "json",
              success:function(data)
              {
                $.each(data, function(key, city)
                 {     
                  $('#stadium').prop('disabled', false).css('background','aliceblue').append('<option value="'+city.id+'">'+city.name+'</option>');
                 
                });
              }
          });
        });
      });
      $(document).ready(function(){
        $('#stadium').change(function(){
           var city = $('#stadium').val();
           $('#details').html('');
           $.ajax({
              url:'getStadiumDetail1/{id}',
              type:'GET',
              data:{id:city},
              dataType: "json",
              success:function(data)
              {
                $.each(data, function(key, city)
                 {     
                  $('#details').prop('disabled', false).css('background','aliceblue').append('<option value="'+city.id+'">'+city.name+'</option>');
                 
                });
              }
          });
        });
      });
    </script>  
            
               
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

</body>

</html>