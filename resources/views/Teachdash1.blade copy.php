@extends('layouts.layout')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE HTML>
<html>

<style>
#header{
		 background-image: url("img/new.png");
		 
		  background-repeat: no-repeat;
		  background-color:white;
		  width:100%;
		 padding-left:230px;
	}

	table{
		margin-left:250px;
		width:70%;
		height:80%;

	
	}
	#navbar1{
		  width:100%;
		 padding-left:130px;
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
    <style>
		nav{
		 
		 padding-left:230px;
		 margin-right: 5px;
         
	}
	</style>
	
	<body bgcolor="white">
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
								<nav  style="background-color:4B7BE5; padding-left:0px; margin-left:95px;">
									<ul id="menu">
										<li><a href="{{ URL('transfers') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">EXISTING REQUEST</a></li>
					
									
										<li> <a class="#" href="{{ URL('letters1') }}" title="Send a request">Create New Request</a></li>
										
										<li><a href="{{ URL('letters') }}">REQUEST TO BE APPROVED</a></li>
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
				</div>
			</div>
		
			<div id="site_content" class="content">
				
				<div id="wait"></div>
				<div id="content">
					<h4>
					
				
					</h4>
					

			
			<div class="row">
       
    </div>
	     <table>
			 <th>PERSONAL INFORMATION<th>
          <tr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <td><strong>Teacher Identification Nunmber:</strong></td>
               <td> {{ Auth::user()->Employee_id }}</td>
            </div>
        </div>
</tr>

<tr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <td><strong>Full Name:</strong></td>
               <td> {{ Auth::user()->name }}  {{ Auth::user()->name }}</td>
            </div>
        </div>
</tr>

<tr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <td><strong>Email:</strong></td>
               <td> {{ Auth::user()->email }}</td>
            </div>
        </div>
</tr>
<tr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <td><strong>Regional:</strong></td>
               <td> {{ Auth::user()->regional }}</td>
            </div>
        </div>
</tr>
<tr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <td><strong>District:</strong></td>
               <td> {{ Auth::user()->district }}</td>
            </div>
        </div>
</tr>
<tr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <td><strong>Ward:</strong></td>
               <td> {{ Auth::user()->ward }}</td>
            </div>
        </div>
</tr>
<tr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <td><strong>School:</strong></td>
               <td> {{ Auth::user()->schools }}</td>
            </div>
        </div>
</tr>
</table>     
</div>
			</div>    
    </div>
						
				<br><br>
				<center><p>Ofisi ya Rais, Tawala za Mikoa na Serikali za Mitaa. Copyright &copy; TAMISEMI <?php echo date("Y"); ?> All Rights Reserved.</p></center>
			
			<!-- JAVASCRIPTS -->
			<script type="text/javascript" src="js/ajax.js"></script>
			<script type="text/javascript" src="js/_crime.js"></script>
	</body>

</html>