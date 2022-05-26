
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


		<title>Welcome to the Tamisemi Workers Transfer Management System</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
		<meta name="description"
			content="The PWTMS public workers transfer management system helps teacher and public workers in health center.">
		<meta name="keywords" content="teacher, nurse, transfer report,">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/button.css" />
		<script src="https://kit.fontawesome.com/bf523026c9.js" crossorigin="anonymous"></script>
	</head>
	<style>
		#header{
		 background-image: url("img/Tamisemi11.png");
		 
		  background-repeat: no-repeat;
		  width:100%;
	}
	nav{
		  margin-top: 0;
		 
		 
		
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


		<div id="main">
			<div id="header">
				
					
						
					
			
			</div>
			<nav style="background-color:#4B7BE5;">
			     <div id="nav1">
           <ul id="menu">
                       <li><a href="{{ url('/') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>
                @if (Route::has('login'))
                <li class="selected">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ url('registe') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                      
                   
                       
                    @endauth
               
            @endif
					
				</ul>
				</div>
			</nav>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">LOGIN FORM</h3>
                            <center><a href="index.html"><img src="assets/img/logo2.jpg" alt="no image" width=100></a></center>
		
    <x-auth-card>
        <x-slot name="logo">
      
        </x-slot>
        
     

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('EMPLOYEE_ID')" />

                <x-input id="email1" class="block mt-1 w-full" type="text" name="Employee_id" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
                @if (Route::has('register'))
                       register here
                <x-button class="ml-3">
                     <a href="{{ url('registe') }}" style="color:white" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">create account here</a>
</x-button> 
                      @endif
            </div>
        </form>
    </x-auth-card>

	
	</body>
 

</html>
