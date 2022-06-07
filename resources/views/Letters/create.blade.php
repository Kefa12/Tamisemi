<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Teacher Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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

                <div class="navbar-nav w-100">
                    <a href="{{ URL('dashboard') }}"  class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                
                 
                    <a href="{{ URL('transfers') }}" class="nav-item nav-link"><i class="fa fa-search" aria-hidden="true"></i>Swap teacher</a>
                    <a href="{{ URL('letters1') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>New Request</a>
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

            <style>
                .form1{
                    margin-left:20px;
                   margin-top:0px;
                   border: 1px solid #0096FF;
                   border-radius: 5px;
                   width:300px;
                }
                h5{
                    padding-left:20px;
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
            </center>


	<!-- JAVASCRIPTS -->
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
    <script type="text/javascript" src="js/ajax.js"></script>

			<script type="text/javascript" src="js/_crime.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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