@extends('layouts.layout')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE HTML>
<html>

	<head>
		<title>Home -{{Auth::user()->name}}</title>
		<meta name="description" content="website description" />
		<meta name="keywords" content="website keywords, website keywords" />
		<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/button.css" />
		<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico" />
		<script src="https://kit.fontawesome.com/bf523026c9.js" crossorigin="anonymous"></script>
	</head>

	<body>
		<div id="main">
			<div id="header">
				<div id="logo">
					<div class="logo_img">
						<img src="../img/T-logo.jpg" alt="NPS Logo" height="auto" width="13%"></img>
						<div id="logo_text">
						<h1><a class="logo_colour" href="index.php">TAMISEMI</a></h1>
						<h2>President's Office Regional Administration and Local Government</h2>
						</div>
					</div>
				</div>
				<div class="profile_info">
					<figure class="user_avatar"><img src="../img/admin_profile.png" width="5%">
					<strong>  {{Auth::user()->name}}</strong>
                        
						<small style="font-size:15px">
                        
							<i style="color: #888;">({{ __('Teacher') }})</i>
								
							<form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                       
                 
						
                   
					
                            {{ __('LogOut') }}
</form>
                           
                            </x-responsive-nav-link> 
				</figure>
					<div class="user_info">
					
					</div>
				</div>
				<div id="navbar">
					<nav>
						<ul id="menu">
						<li class="selected"><a href="{{ URL('transfers') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">SEARCH</a></li>
		
							<li> <a class="#" href="{{ route('transfers.create') }}" title="Send a request">New Request</a></li>
							<li> <a class="#" href="{{ URL('letters1') }}" title="Send a request">Create New Request</a></li>
							
							<li><a href="{{ URL('letters') }}">REQUEST PROGRESS</a></li>
							<li><a href="request_progress.php">View progress Request</a></li>
							<li style="float: right;"><a href="contact.php"><i class="fa fa-phone"></i> Contact Us</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="site_content" class="content">
			
				<div id="wait"></div>
				<div id="content">
					<h4>
					
				
					</h4>
					
				

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>SEND TRANSFER REQUEST</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('transfers.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

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
    <form action="{{ route('transfers.store') }}" method="POST" >
        @csrf
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Current_school:</strong>
                    <textarea class="form-control" style="height:50px" name="cschool"
                        placeholder="Current_school"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Current_district:</strong>
                    <input type="text" name="cdistrict" class="form-control" placeholder="iringa">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Transfer_district:</strong>
                    <input type="text" name="tdistrict" class="form-control" placeholder="mbeya">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" class="form-control" placeholder="request">
                </div>
            </div>
           
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

				</div>
				
              
			</div>
			<div id="content1">
		

            </div>
            
			
			<!-- JAVASCRIPTS -->
			<script type="text/javascript" src="js/ajax.js"></script>
			<script type="text/javascript" src="js/_crime.js"></script>
	</body>

</html>