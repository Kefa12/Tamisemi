
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
   #form1{
		  width:100%;
		 padding-left:365px;
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
@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
            
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
    <form action="{{ route('letters.store') }}" method="POST"  id="form1">
        @csrf
     
        <div>
        <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">
  
    <input type="hidden" name="name" class="form-control" placeholder="Name" value="{{ Auth::user()->name }}">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <input type="hidden" class="form-control" name="cschool1" value="{{ Auth::user()->schools }}"
        placeholder="Current_school"></input>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <input type="hidden" class="form-control" style="height:50px" name="ward1" value="{{ Auth::user()->ward }}"
        placeholder="Current_school"></textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <input type="hidden" name="cdistrict" class="form-control" placeholder="iringa" value="{{ Auth::user()->district }}">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
  
    <input type="hidden" name="regional" class="form-control" value="{{ Auth::user()->regional }}">
</div>
</div>



<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
 
    <input type="hidden" name="ward" class="form-control" placeholder="request"  value="{{ Auth::user()->ward }}">
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="Headmaster" class="form-control" placeholder="request">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="WEO" class="form-control" placeholder="request"></input>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="DEO" class="form-control" placeholder="request">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   
    <input type="hidden" value="pending" name="DED" class="form-control" placeholder="request">
</div>
</div>

                <h2>TRANSFER REQUEST</h2>
        
              <div class="form-group">
												                                              <h5 class="text-info  mb-4">Choose Regional
																							 <select id="state" name="regional" class="form-control" style="width:500px;">
																										  <option width="100px"><h1 class="form-control">Choose Regional</h1></option>
																												  @foreach($regional_rd as $row)
																										 <option value={{$row->id}}>{{$row->name}}</option>
																													@endforeach   
																							  </select></h5>
												   </div> 
													<div class="form-group">
																										  <h5 class="text-info  mb-4">Choose District
																											   <select  id="city" name="tdistrict" style="width:500px;" class="form-control" disabled >
																													<option  width="100px">City List</option>
																											   </select></h5>
																					</div>
																				<div class="form-group">
																						   <h5 class="text-info  mb-4">Choose Ward
																							 <select  id="stadium"  name="ward" style="width:500px;"  class="form-control" disabled>
																							 </select></h5>
																				  </div>
																	<div class="form-group">
																									   <h5 class="text-info  mb-4">Choose school
																												<select  id="details" name="schools" style="width:500px;" class="form-control" disabled>
																												</select></h5>
																	</div>
																							   </div>
                                                                                               <div class="form-group">
           
                                                                                <h5 class="text-info  mb-4">
                                                                                    
                                                                                        <strong>Description:</strong>
                                                                                        <input type="text" style="width:500px;" name="description" class="form-control" placeholder="request">
                                                                                    
                                                                                    </h5>
                                                                                </div>
          

           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="padding-left:20px" >
                <button type="submit" style="width:200px; padding-left:20px" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

@endsection
	<!-- JAVASCRIPTS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>

			<script type="text/javascript" src="js/_crime.js"></script>
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
	</body>

</html>