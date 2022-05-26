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
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <style>
        body{
            background-color:gray;
        }
      
        </style>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
			
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
                   
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
                       
							<h3 class="account-title">REGISTRATION FORM</h3>
                            <center><a href="index.html"><img src="assets/img/logo2.jpg" alt="no image" width=100></a></center>
		
    <x-auth-card>
        <x-slot name="logo">
          
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
           <table>
             <tr>
            <!-- Name -->
                <div>
              <td>
                <x-label for="Employee_id" :value="__('Employee_id')" />

                <x-input id="Employee_id" class="block mt-1 w-full" type="text" name="Employee_id" :value="old('first_name')" required autofocus />
              </td>
            </tr>
            <tr>
             <td>
                <x-label for="name" :value="__('first_name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('first_name')" required autofocus />
            </div>
            </td>
            <td>
            <div>
                <x-label for="name1" :value="__('second_name')" />

                <x-input id="name1" class="block mt-1 w-full" type="text" name="name1" :value="old('second_name')" required autofocus />
            </div>
            </td>
      </tr>
      <tr>
               <td>
            <!-- Email Address -->
                     
                           <x-label for="email" :value="__('Phone')" />

                          <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('Phone')" required />
                     </div>
              </td>
       </tr>

            <!-- Password -->
        <tr>
               <td>
                       <div class="mt-4">
                              <x-label for="password" :value="__('Password')" />

                                        <x-input id="password" class="block mt-1 w-full"
                                                            type="password"
                                                              name="password"
                                                                 required autocomplete="new-password" />
                      </div>
               </td>

            <!-- Confirm Password -->
               <td>
                    <div class="mt-4">
                           <x-label for="password_confirmation" :value="__('Confirm Password')" />

                           <x-input id="password_confirmation" class="block mt-1 w-full"
                                     type="password"
                                      name="password_confirmation" required />
                      </div>
               </td>
        </tr>
            
             <!-- Select Option Rol type -->
        <tr>
                <td>
            
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
                </td>
        </tr>
        <tr>
                <td>
            
                         <div class="row mt-5">
                         <div class="col-sm-2">
                               <h5 class="text-info mb-4">Choose Regional</h5>
                                         <select id="state" name="regional" class="form-control">
                                                      <option width="700"><h1>Select State</h1></option>
                                                              @foreach($regionals as $row)
                                                     <option value={{$row->id}}>{{$row->name}}</option>
                                                                @endforeach   
                                          </select>
                           </div> 
                 </td>
                 <td>
                                     <div class="col-sm-3">
                                              <h5 class="text-info  mb-4">Choose District</h5>
                                                   <select  id="city" name="district" width="700px" class="form-control" disabled >
                                                        <option  width="700px">City List</option>
                                                   </select>
                                     </div>
                                </div>
                 </td>
         </tr>
         <tr>
                 <td>
                              <div class="row mt-5">
                               <div class="col-sm-3">
                                       <h5 class="text-info  mb-4">Choose Ward</h5>
                                         <select  id="stadium"  name="ward"  class="form-control" disabled>
                                         </select>
                               </div>
                 </td>
                 <td>
                                          <div class="col-sm-4">
                                                   <h5 class="text-info  mb-4">Choose school</h5>
                                                            <select  id="details" name="schools" class="form-control" disabled>
                                                            </select>
                                           </div>
                                           </div>
                </td>

      </tr>
      <table>
  
   

                <div class="mt-4">
                <x-label for="school" :value="__('school')" />

                <x-input id="school" class="block mt-1 w-full"
                                type="text"
                                name="school" required />
            </div>
     

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
            </form>
    </x-auth-card>

</div>

		<div id="footer">
			<p>Copyright &copy; TAMISEMI <?php echo date("Y"); ?> All Rights Reserved.</p>
		</div>
		<!-- JAVASCRIPTS -->
	
	</body>

</html>

 
	
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
