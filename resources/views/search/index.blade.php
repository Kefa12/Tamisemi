
@extends('layouts.layout')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE HTML>
<html>
	<style>
#header{
		 background-image: url("img/new.png");
		 
		  background-repeat: no-repeat;
		  width:100%;
		  padding-left:270px;
	}
	#navbar1{
		  width:100%;
		 padding-left:165px;
		 padding-right:360px;
	}
	#navbar2{
		  width:100px;
		 float:right;
	}
	
	</style>

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
		<div id="header" style="background-color:white;">
			      <img src="img/new.png" width="85%">
				
            </div>
				<div class="profile_info">
					
					<div class="user_info">
					
					</div>
				</div>
				
				<div id="navbar">
				<div id="navbar1">
								<nav  style="background-color:4B7BE5; padding-left:0px; margin-left:102px;">
									<ul id="menu">
										<li><a href="{{ URL('transfers') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">EXISTING REQUEST</a></li>
					
									
										<li> <a class="#" href="{{ URL('letters1') }}" title="Send a request">Create New Request</a></li>
										
										<li><a href="{{ URL('letters') }}">REQUEST PROGRESS</a></li>
										<li><a href="{{ URL('letters3') }}">REQUEST FROM TEACHER</a></li>
										<div id="navbar2">
										<li style="float: right;" width=100px>
										<select id="one">
									<figure class="user_avatar"><img src="../img/admin_profile.png" width="100%">
										<option value="two"><strong>({{ __('Teacher') }}) </strong></option>
											
											<small style="font-size:15px">
											
											<option value="three"><i style="color: #888;"> {{Auth::user()->name}}</i></option>
											</select>
												<form method="POST" action="{{ route('logout') }}">
																	@csrf

																	<x-responsive-nav-link :href="route('logout')"
																			onclick="event.preventDefault();
																						this.closest('form').submit();">					
																	{{ __('LogOut') }}
															</form>
                                             
												</x-responsive-nav-link> 
											
										</figure>
										
                                      </div>
										</li>
										
									</ul>
								</nav>
													
                </div>
			<div id="site_content" class="content">
			
				<div id="wait"></div>
				<div id="content">
					<h4>
					
				
					</h4>
					
					<form action="{{ route('transfers.index') }}" method="GET" role="search">
					<div class="input-group">
						<table  class="table table-bordered table-responsive-lg">
                    <tr>
						<td>  <input type="text" class="form-control mr-2" style="width=300px;" name="term1" placeholder="Search regional " id="term1"></input>
                         	<a href="{{ route('transfers.index') }}" class=" mt-1"></td>
					   <td>  <input type="text" class="form-control mr-2" name="term2" placeholder="Search transfer District " id="term2">
                         	<a href="{{ route('transfers.index') }}" class=" mt-1"></td>
					   <td >  <input type="text" class="form-control mr-2" name="term" placeholder="Search ward" id="term">
                         	<a href="{{ route('transfers.index') }}" class=" mt-1"></td>
						<td colspan=2>	<button class="btn btn-info" type="submit" title="Search users"><br>
	                    		<span class="fas fa-search"></span>
	                         	</button></td>
							
				      
							
					 </tr>
                    </table>
					
	 
</form>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
      
		
			<tr style="background-color:gray">
            <th>No</th>
            <th>Name</th>
			<th>regional</th>
			<th>transfer district</th>
			<th>ward</th>
            <th>current school</th>		
            <th>description</th>
            
            <th width="280px">Action</th>
        </tr>
	
        @foreach ($letters as $letter)
            <tr>
			@if(($letter->name!=Auth::user()->name)&& $i<10)
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
				<td>{{ $letter->regional }}</td>
				<td>{{ $letter->tdistrict }}</td>
				<td>{{ $letter->ward }}</td>
                <td>{{ $letter->cschool }}</td>			
                <td>{{ $letter->description }}</td>
                
                <td>
                    <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">

                       
					
						
                        <a href="{{ route('letters.edit', $letter->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>
					

                        @csrf
                        @method('DELETE')
                        @role('admin')
						<a href="{{ route('letters.show', $letter->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                        @endrole
                    </form>
                </td>
            </tr>
			@endrole
        @endforeach
    </table>

   

				</div>
				
              
			</div>
			
            
			
			<!-- JAVASCRIPTS -->
			<script type="text/javascript" src="js/ajax.js"></script>
			<script type="text/javascript" src="js/_crime.js"></script>
	</body>

</html>