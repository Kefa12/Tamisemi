
    <link  rel="stylesheet" href="{{asset('css/style.css') }}">
	<link  rel="stylesheet" href="{{asset('css/button.css') }}">
  <link href="{{ url('/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('/css/button.css') }}" rel="stylesheet">
  
<!DOCTYPE html>
<html>

	<head>
		<title>Welcome to the Tamisemi Workers Transfer Management System</title>
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('css/img/logo1.png') }}" />
		<meta name="description"
			content="The PWTMS public workers transfer management system helps teacher and public workers in health center.">
		<meta name="keywords" content="teacher, nurse, transfer report,">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link href="{{ url('/css/style.css') }}" rel="stylesheet">
	
      
		
		<script src="https://kit.fontawesome.com/bf523026c9.js" crossorigin="anonymous"></script>
	</head>

	<body>
		<div id="main">
			
			<nav>
            <ul id="menu">
                @if (Route::has('login'))
                <li class="selected">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
               
            @endif
					
				</ul>
			</nav>

			<!-- Pages Content -->
			<div id="site_content" class="content">
			
			<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
       
        </x-slot>
        
        <center><img src="{{URL::asset('/img/login_avatar.png')}}" alt="profile Pic" height="200" width="200"></center>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
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
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

		<div id="footer">
			<p>Copyright &copy; TAMISEMI <?php echo date("Y"); ?> All Rights Reserved.</p>
		</div>
		<!-- JAVASCRIPTS -->
	
	</body>

</html>
