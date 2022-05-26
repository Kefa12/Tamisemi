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
					<figure class="user_avatar"><img src="../img/admin_profile.png" width="5%"></figure>
					<div class="user_info">
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                     
                  
						
                   
						<strong>  {{Auth::user()->name}}</strong>
                        
						<small style="font-size:15px">
                        
							<i style="color: #888;">({{ __('Teacher') }})</i>
                            {{ __('LogOut') }}
                            </x-responsive-nav-link> 
						
					</div>
				</div>
				<div id="navbar">
					<nav>
						<ul id="menu">
                        @role('Teacher')
							<li class="selected"><a href="{{ URL('transfers') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">SEARCH</a></li>

                            <li> <a class="btn btn-success" href="{{ route('transfers.create') }}" title="Send a request">New Request</a></li>
							<li><a href="{{ URL('letters') }}">REQUEST TO BE APPROVED</a></li>
							<li><a href="request_progress.php">View progress Request</a></li>
                        @endrole
                        @role('DEO')
                            <li><a href="{{ URL('/DEOdash') }}">HOME</a></li>
                        @endrole
                        @role('DED')
                            <li><a href="{{ URL('/DEOdash') }}">HOME</a></li>
                        @endrole
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
@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Manage Request </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('districts.create') }}" title="Send a request"> <i class="fas fa-plus-circle"></i>
                    </a>
                    
            </div>
        </div>
    </div>
    <div class="pull-left">
   

                   

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr style="background-color:gray">
            <th>No</th>
            <th>Name</th>
            <th>current school</th>
            <th>current disctrict</th>
            <th>transfer district</th>
            <th>description</th>
            
            <th width="280px">Action</th>
        </tr>
      
        @foreach ($letters as $letter)
        @foreach ($districts as $district)
            <tr>
            
        
            @if(($district->DEO==Auth::user()->name ||  $district->DED==Auth::user()->name)&& $letter->cdistrict==$district->name)
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->cschool }}</td>
                <td>{{ $letter->cdistrict }}</td>
                <td>{{ $letter->tdistrict }}</td>
                <td>{{ $letter->description }}</td>
                
                <td>
              
                    <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">

                        <a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                       
                        <a href="{{ route('letters.edit', $letter->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>
           
               @endif
           
           
                   
                        @csrf
                        @method('DELETE')
                        @role('Tamisemi_Director')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                        @endrole
                      
                    </form>
                </td>
            </tr>
        @endforeach
        @endforeach
    </table>

    {!! $districts->links() !!}

@endsection