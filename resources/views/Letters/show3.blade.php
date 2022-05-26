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
			      <img src="img/news.jpg" width="85%">
				
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
			<div id="site_content" class="content">
				
				<div id="wait"></div>
				<div id="content">
					<h4>
					
				
					</h4>
                   
@extends('layouts.layout')


@section('content')
<div id="content1" style="background-color:white;">
   <table>
       <tr>
              <td>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $letter->name }}</h2>
            </div>
                  </td>
                  <td>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('transfers.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    </td>
</tr>
        <tr>
           
      
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td> <strong>Name:</strong></td>
            <td>  {{ $letter->name }}    </td>
            </div>
        </div>

<tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td><strong>current school</strong>   </td>
            <td>  {{ $letter->cschool}}   </td>
            </div>
        </div>

</tr>
<tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td> <strong>current district</strong>   </td>
            <td>  {{ $letter->cdistrict }}   </td>
            </div>
        </div>
</tr>
<tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td><strong>Transfer_District</strong>   </td>
            <td>  {{ $letter->tdistrict }}      </td>
            </div>
        </div>
</tr>
<tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td><strong>description</strong>   </td>
            <td>  {{ $letter->description }}      </td>
            </div>
        </div>
</tr>
<tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td><strong>HeadMaster_Approved</strong>   </td>
            <td>   {{ $letter->Headmaster }}    </td>
            </div>
        </div>
</tr>
<tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td> <strong>Ward_Education_Officer</strong>   </td>
            <td>   {{ $letter->WEO }}      </td>
            </div>
        </div>
</tr>
<tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td> <strong>District_Education_Officer</strong>   </td>
            <td>  {{ $letter->DEO }}    </td>
            </div>
        </div>
</tr>
<tr>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <td><strong>District_Executive_Director</strong>    </td>
            <td>   {{ $letter->DED }}   </td>
            </div>
        </div>
</tr>

        
</table>
       </div>
@endsection
    </div>
</div>
			</div>
			
			<!-- JAVASCRIPTS -->
			<script type="text/javascript" src="js/ajax.js"></script>
			<script type="text/javascript" src="js/_crime.js"></script>
	</body>

</html>