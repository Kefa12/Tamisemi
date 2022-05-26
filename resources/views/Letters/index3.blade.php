
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
                                    @role('Teacher')
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
                                        @endrole
                                        @role('Headmaster')
                                              <li><a href="{{ URL('/Headmaster_dash') }}">HOME</a></li>
                                              <li><a href="{{ URL('schools') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">SEE REQUEST FLOW</a></li>
						                      <li><a href="{{ URL('letters3') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">EXCHANGE REQUEST</a></li>
                                        @endrole
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
            <div class="pull-left">
                <h2>Manage Request </h2>
            </div>
           
        </div>
    </div>
    <div class="pull-left">
    @role('Teacher')
    <form action="{{ route('letters.index') }}" method="GET" role="search">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered table-responsive-lg" style="background-color:gray;">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>current school</th>
            <th>Transfer school</th>
            <th>current disctrict</th>
            <th>transfer district</th>
            <th>description</th>
            <th>Message from Teacher</th>
            <th>Teacher Name</th>
            <th>Teacher_Action</th>
            <th>HeadMaster_Action</th>
           
            
            <th width="280px">Action</th>
        </tr>
      
    @foreach ($letters as $letter)
            <tr style="background-color:white;">
        @if($letter->author==Auth::user()->name)
          
            
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->cschool }}</td>
                <td>{{ $letter->tschool }}</td>
                <td>{{ $letter->cdistrict }}</td>
                <td>{{ $letter->tdistrict }}</td>
                <td>{{ $letter->description }}</td>
                <td>{{ $letter->Message }} from {{ $letter->author }}</td>
                <td>{{ $letter->author }}</td>
                @if( $letter->Teacher_approved == 'REJECTED BY TEACHER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->Teacher_approved == 'APPROVED BY TEACHER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">APPROVED</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
                @if( $letter->Transfer_Headmaster == 'REJECTED BY HEADMASTER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->Transfer_Headmaster == 'APPROVED BY HEADMASTER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">APPROVED</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
               
               
               
                
                
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
    </table>
    @endrole

    @role('Headmaster')
    <form action="{{ route('letters.index') }}" method="GET" role="search">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg" style="background-color:gray;">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>current school</th>
            <th>Transfer school</th>
            <th>current disctrict</th>
            <th>transfer district</th>
            <th>description</th>
            <th>Message from Teacher</th>
            <th>Teacher Name</th>
            <th>Teacher_Action</th>
            <th>HeadMaster_Action</th>
           
            
            <th width="280px">Action</th>
        </tr>
      
    @foreach ($letters as $letter)
            <tr style="background-color:white;">
        @if($letter->tschool==Auth::user()->schools && $letter->author!='unknown')
          
            
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->cschool }}</td>
                <td>{{ $letter->tschool }}</td>
                <td>{{ $letter->cdistrict }}</td>
                <td>{{ $letter->tdistrict }}</td>
                <td>{{ $letter->description }}</td>
                <td>{{ $letter->Message }} from {{ $letter->author }}</td>
                <td>{{ $letter->author }}</td>
                @if( $letter->Teacher_approved == 'REJECTED BY TEACHER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->Teacher_approved == 'APPROVED BY TEACHER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">APPROVED</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
                @if( $letter->Transfer_Headmaster == 'REJECTED BY HEADMASTER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->Transfer_Headmaster == 'APPROVED BY HEADMASTER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">APPROVED</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
               
               
               
                
                
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
    </table>

    @endrole

  

@endsection	

				</div>
			</div>
			
			<!-- JAVASCRIPTS -->
			<script type="text/javascript" src="js/ajax.js"></script>
			<script type="text/javascript" src="js/_crime.js"></script>
	</body>
  
</html>