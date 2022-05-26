<link  rel="stylesheet" href="{{asset('css/style.css') }}">
	<link  rel="stylesheet" href="{{asset('css/button.css') }}">
  <link href="{{ url('/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('/css/button.css') }}" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

        <link href="{{ url('assets/img/favicon.png') }}" rel="stylesheet">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ url('assets2/css/style.css') }}">
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
        <style>
    #header{
      height:90px;
    }
    option{
      width:300;
    }
    </style>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <header id="header" class="fixed-top">
  
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html">TAMISEMI</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
  @if (Route::has('login'))
           <li>
                  @auth
        <a class="active"  href="{{ url('/dashboard') }}">Dashboard</a></li>
                  @else
      
        </ul>
                  
                 </nav><!-- .navbar -->
                      <a href="{{ url('/') }}" class="get-started-btn">HOME</a>
                      <a href="{{ url('second') }}" class="get-started-btn">LOGIN</a>

                      @if (Route::has('register'))
                     <a href="{{ route('register') }}"class="get-started-btn">Register</a>
                      @endif
                  @endauth
             
          @endif
   
         
      
    

  </div>
</header><!-- End Header -->
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
			
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
					<center>	<a href="index.html"><img src="assets/img/logo3.jpg" alt="Dreamguy's Technologies"></a>	</center>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">REGISTRATION FORM</h3>

			<!-- Pages Content -->
         

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
             <!-- Select Option Rol type -->
             <div class="mt-4">
                    <x-label for="role_id" value="{{ __('Register as:') }}" />
                    <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="Tamisemi_Director">Tamisemi_Director</option>
                        <option value="Regional_Director">Regional_Director</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Headmaster">Headmaster/HeadMistress</option>
                        <option value="Health_Worker">Health_Worker</option>
                        <option value="Weo">Ward_Executive_Officer</option>
                        <option value="DEO">District_Education_Officer</option>
                        <option value="DED">District/Municipal_Director</option>
                        <option value="Medical_Doctor_in-Charge">Medical_Doctor_in-Charge</option>
                        
                    </select>
                </div>
                <div class="row mt-5">
                <div class="col-sm-2">
      <h5 class="text-info mb-4">Choose Regional</h5>
      <select id="state" name="state" class="form-control">
        <option><h1>Select State</h1></option>
         @foreach($regionals as $row)
            <option value={{$row->id}}>{{$row->name}}</option>
         @endforeach   
      </select>
    </div> 

    <div class="col-sm-3">
        <h5 class="text-info  mb-4">Choose District</h5>
        <select  id="city" name="city"  class="form-control" disabled >
          <option>City List</option>
       </select>
    </div>
  </div>
    <div class="row mt-5">
    <div class="col-sm-3">
        <h5 class="text-info  mb-4">Choose Ward</h5>
        <select  id="stadium"  name="stadium"  class="form-control" disabled>
       </select>
    </div>
    <div class="col-sm-4">
        <h5 class="text-info  mb-4">Choose school</h5>
        <select  id="details" class="form-control" disabled>
       </select>
    </div>
  </div>
  
   

                <div class="mt-4">
                <x-label for="school" :value="__('school')" />

                <x-input id="school" class="block mt-1 w-full"
                                type="text"
                                name="school" required />
            </div>
     

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ url('second') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
 
	
		<!-- JAVASCRIPTS -->
	
		
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
