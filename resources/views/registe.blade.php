<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tamisemi Teacher Transfer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <style>
    .form-group{
      padding-left:10px;
      padding-right:10px;
    }
    </style>
  <link href="assets/img/favicon.png" rel="icon">
  
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Reveal - v4.7.0
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
 
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
      <h1><a href="index.html">PW<span>TMS</span></a></h1>
         </div>

      <nav id="navbar" class="navbar">
        <ul >
          <li><a class="nav-link scrollto active" href="{{ url('/') }}" style="color:black;">Home</a></li>
          @if (Route::has('login'))
          @auth
          <li><a class="nav-link scrollto" href="{{ url('/dashboard') }}">Dashboard</a></li>
          @else
          <li><a class="nav-link scrollto" href="{{ route('login') }}" >Login</a></li>
          @if (Route::has('register'))
          <li><a class="nav-link scrollto " href="{{ url('welcome1') }}"  >Register</a></li>
          @endif
                      
                   
                       
                      @endauth
                 
              @endif
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

			<!-- Pages Content -->
	<div class="container register">                  
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              
                                	
							<x-auth-card>
							

								<!-- Validation Errors -->
								<x-auth-validation-errors class="mb-4" :errors="$errors" />
<div class="card bg-blue text-black" style="border-radius: 25px; border: 1px solid blue;">


                <form method="GET" action="{{ URL('registe22') }}">
              
            @csrf
            <center><h1>Registration form </h1>
            <img src="assets3/img/logo2.jpg" alt="no image" width=100></center></center>
			          <div class="row register-form">
                             
                             
											  <div class="col-md-6">
													 <div class="form-group">

												
													 <h4 >Check_Number</h4>
														<input id="Employee_id"  class="form-control" type="text" name="Employee_id" placeholder="Check_number *" :value="old('first_name')" required autofocus />
													   </div>
													  <div class="form-group">
												
													  <h4 >First Name</h4>
														<input id="name"  class="form-control" type="text" placeholder="First Name *"  name="name" :value="old('first_name')" required autofocus />
													</div>
													 <div class="form-group">
												
                                                     <h4 >Last Name</h4>
														<input id="name1"  class="form-control" type="text" placeholder="Last Name *" name="name1" :value="old('second_name')" required autofocus />
													</div>
													 <div class="form-group">
													 
													
													 <h4 >Phone_number</h4>
														  <input id="phone_number"  class="form-control" type="text" placeholder="phone_number *" name="phone_number" :value="old('Phone')" required />
												      </div>
                   
											  
													 <div class="form-group">
													 
														
													 <h4 >Email</h4>
                           
														  <input id="email"  class="form-control" type="text" placeholder="Email *" name="email" :value="old('Phone')" required />
												      </div>
													 <div class="form-group">
															
													 <h4 >Password</h4>
																		<input id="password"  class="form-control"
																							type="password"
																							  name="password"
																							  placeholder="Password *"
																								 required autocomplete="new-password" />
									
											       
                      </div>
                    	
                           <div class="form-group">
													<h4 >Confirm-Password</h4>
														   <input id="password_confirmation"  class="form-control"
																	 type="password"
																	 placeholder="Confirm-Password *"
																	  name="password_confirmation" required />
											      </div>
                            </div>
                    <div class="col-md-6">
                          <div class="form-group">
												   <h4 >User_role</h4>
															<select name="role_id"  class="form-control">
				
																   <option value="Teacher">Teacher</option>
																  
														
														   </select>
												   
                          </div>
											
												 
											     
												   <div class="form-group">
												                                             <h4 >Choose Regional</h4>
																							 <select id="state" name="regional" class="form-control">
																										  <option width="700"><h1 class="form-control">Choose Regional</h1></option>
																												  @foreach($regional_rd as $row)
																										 <option value={{$row->id}}>{{$row->name}}</option>
																													@endforeach   
																							  </select>
												     </div> 
                           
													<div class="form-group">
																										  <h4>Choose District</h4>
																											   <select  id="city" name="district" width="700px" class="form-control" disabled >
																													<option  width="700px">City List</option>
																											   </select>
																					</div>
																				<div class="form-group">
																						   <h4>Choose Ward</h4>
																							 <select  id="stadium"  name="ward"  class="form-control" disabled>
																							 </select>
																				  </div>
																	<div class="form-group">
																									   <h4>Choose school</h4>
																												<select  id="details" name="schools" class="form-control" disabled>
																												</select>
																	</div>
																							   </div>
																	</td>

														  </tr>
														  <table>
													  
													     </div>                        
													</div>
                      </div>

															
														 

																<div class="form-group">
																	<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="color:black;">
																		{{ __('Already registered?') }}
																	</a>

																	<button class="ml-4" style="background-color:blue; color:white; width:150px;">
																	<input type="hidden"	value="{{ __('register22') }}"/>Register
																	</button>
																</div>
																</form>
														</x-auth-card>
               </div> 
               </div>         
	
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/_crime.js"></script>
		
		<!-- jQuery -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

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
	</body>

</html>