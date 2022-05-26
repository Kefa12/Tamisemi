<!DOCTYPE html>
<html>

	<head>
		<title>Welcome to the Tamisemi Workers Transfer Management System</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
		<meta name="description"
			content="The PWTMS public workers transfer management system helps teacher and public workers in health center.">
		<meta name="keywords" content="teacher, nurse, transfer report,">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/button.css" />

      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

		<script src="https://kit.fontawesome.com/bf523026c9.js" crossorigin="anonymous"></script>
	</head>
	<style>
	#header{
		 background-image: url("img/Tamisemi11.png");
		 
		  background-repeat: no-repeat;
		  width:100%;
	}
	.nav1{
		  margin-top: 0;
          color:white;
		  background-color: red;
	   		 
		 
		
	}

	.img{
		 margin:0%;
		
		  position:relative;		
	}
	.img1{
		  position:absolute;
		 
		 color:black;
		  font-size:67px;
		  top:17px;
		  left:50px;		
	}
	.img2{
		  position:absolute;
		
		  color:black;
		  font-size:67px;
		  bottom:20px;
		  left:50px;		
	}
	td{
		  margin-top: 0;
		  background-color:white;
		 
		 
		
	}
	#nav1{
		 
		background-color: gray;		
	}
	#main{
		  padding-left: 210px;
		  padding-right: 210px;
		background-color: white;		
	}
	</style>

	<body>
		<div id="main">
			<div id="header">
				
					
						
					
			
			</div>
			<nav style="background-color:#4B7BE5;">
			     <div id="nav1">
           <ul id="menu">
		              <li><a href="{{ url('/') }}" >Home</a></li>
                @if (Route::has('login'))
                <li class="selected">
                    @auth
                        <a   href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ url('registe') }}">Register</a></li>
                        @endif
						
                        
                                          @endauth
               
            @endif
					
				</ul>
				</div>
			</nav>

			<!-- Pages Content -->
	<div class="container register">                  
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              
                                	
							<x-auth-card>
							

								<!-- Validation Errors -->
								<x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
              
            @csrf
            <center><h1>Registration form </h1>
                            </center>
			                     <div class="row register-form">
                             
                             
											  <div class="col-md-4">
													 <div class="form-group">

												
													 <h4 >Employee_id</h4>
														<input id="Employee_id"  class="form-control" type="text" name="Employee_id" placeholder="Employee_id *" :value="old('first_name')" required autofocus />
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
														  <input id=""phone_number""  class="form-control" type="text" placeholder="phone_number *" name=""phone_number"" :value="old('Phone')" required />
												      </div>
                                               </div>
											   <div class="col-md-4">
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
												   <div class="form-group">
												   <h4 >User_role</h4>
															<select name="role_id"  class="form-control">
				
																   <option value="Health_Worker">Health_Worker</option>
																  
														
														   </select>
												   </div>
											 </div>
												  <div class="col-md-4">
												  
											     
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
																									   <h4>Choose Hospitals</h4>
																												<select  id="details" name="schools" class="form-control" disabled>
																												</select>
																	</div>
																							   </div>
																	</td>

														  </tr>
														  <table>
													  
													   

															
														 

																<div class="form-group">
																	<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
																		{{ __('Already registered?') }}
																	</a>

																	<button class="ml-4">
																		{{ __('Register') }}
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
              url:'getStadiumDetail4/{id}',
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