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
					
                    @extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Request Progress</h2>
            </div>
          
        </div>
    </div>
    <div class="pull-left">
    <form action="{{ route('letters.index') }}" method="GET" role="search">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 @foreach ($letters as $letter)
  @if($letter->author=="unknown" && $letter->name==Auth::user()->name)
    <table  style="background-color:gray; padding-left:114px;">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>current school</th>
            <th>Transfer school</th>
            <th>current disctrict</th>
            <th>transfer district</th>
            <th>description</th>
            <th>HeadMaster_Action</th>
            <th>WEO_Action</th>
            <th>DEO_Action</th>
            <th>DED_Action</th>
            
            <th width="280px">Action</th>
        </tr>
      
        @foreach ($letters as $letter)
            <tr style="background-color:white;">
           
            @if(($letter->name==Auth::user()->name || !(Auth::user()->hasRole(['Teacher'])))) 
            
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->cschool }}</td>
                <td>{{ $letter->tschool }}</td>
                <td>{{ $letter->cdistrict }}</td>
                <td>{{ $letter->tdistrict }}</td>
                <td>{{ $letter->description }}</td>
                @if( $letter->Headmaster == 'REJECTED BY HEADMASTER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->Headmaster == 'APPROVED BY HEADMASTER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">APPROVED</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
                @if( $letter->WEO == 'REJECTED BY WEO')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->WEO == 'APPROVED BY WEO')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">APPROVED</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
                @if( $letter->DEO == 'REJECTED BY District_Education_Officer')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->DEO == 'APPROVED BY District_Education_Officer')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">APPROVED</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif

                @if( $letter->DED == 'REJECTED BY District_Executive_Director')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->DED == 'APPROVED BY District_Executive_Director')
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
                        @role('Tamisemi_Director')
                        <a href="{{ route('letters.edit', $letter->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>
                        @endif
           
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

    <table>
              <th style="background-color:black;">
                  <td>HEADMSTER RESPOND TIME TAKEN</td>
                  <td>WEO RESPOND TIME TAKEN</td>
                  <td>DEO RESPOND TIME TAKEN</td>
                  <td>DED RESPOND TIME TAKEN</td>
                  <td>RED RESPOND TIME TAKEN</td>
              </th>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>

    </table>
       
 @elseif($letter->name==Auth::user()->name )
         
    <table  style="background-color:gray; padding-left:114px;">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>current school</th>
            <th>Transfer school</th>
            <th>current disctrict</th>
            <th>transfer district</th>
            <th>description</th>
            <th>Teacher From another school</th>
            <th>HeadMaster From another school</th>
            <th>HeadMaster_Action</th>
            <th>WEO_Action</th>
            <th>DEO_Action</th>
            <th>DED_Action</th>
            
            <th width="280px">Action</th>
        </tr>
      
        @foreach ($letters as $letter)
            <tr style="background-color:white;">
           
            @if(($letter->name==Auth::user()->name || !(Auth::user()->hasRole(['Teacher'])))) 
            
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->cschool }}</td>
                <td>{{ $letter->tschool }}</td>
                <td>{{ $letter->cdistrict }}</td>
                <td>{{ $letter->tdistrict }}</td>
                <td>{{ $letter->description }}</td>
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

                @if( $letter->Headmaster == 'REJECTED BY HEADMASTER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->Headmaster == 'APPROVED BY HEADMASTER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">APPROVED</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
                @if( $letter->WEO == 'REJECTED BY WEO')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->WEO == 'APPROVED BY WEO')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">APPROVED</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
                @if( $letter->DEO == 'REJECTED BY District_Education_Officer')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->DEO == 'APPROVED BY District_Education_Officer')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">APPROVED</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif

                @if( $letter->DED == 'REJECTED BY District_Executive_Director')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> REJECTED</button>
                </div></td>
               @elseif( $letter->DED == 'APPROVED BY District_Executive_Director')
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
                        @role('Tamisemi_Director')
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
            <tr>
                <td colspan="7"></td>
                <td>{{ $letter->T_comment }}</td>
                <td>{{ $letter->H_comment }}</td>
                <td>no comment</td>
                <td>no comment</td>
                <td>{{ $date2 }}</td>
                
                <td>{{ abs(round((strtotime($date2)-strtotime($letter->created_at))/86400)) }} </td>

            </tr>
         
    </table>
    <table border='1'>
              <th style="background-color:black;">
                  <td style="background-color:black; color:white;">LIFE TIME FOR REQUEST</td>
                  <td style="background-color:black; color:white;">HEADMSTER RESPOND TIME TAKEN</td>
                  <td style="background-color:black; color:white;">WEO RESPOND TIME TAKEN</td>
                  <td style="background-color:black; color:white;">DEO RESPOND TIME TAKEN</td>
                  <td style="background-color:black; color:white;">DED RESPOND TIME TAKEN</td>
                  <td style="background-color:black; color:white;">RED RESPOND TIME TAKEN</td>
              </th>
              <tr>
               
                  <td>{{ abs(round((strtotime($date2)-strtotime($letter->created_at))/86400)) }}</td>
                  @if($letter->Headmaster=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->T_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>

    </table>
           @endif 
        @endforeach

    @else
      
 
    @endif
 @endforeach


  

@endsection	

				</div>
			</div>
			
			<!-- JAVASCRIPTS -->
			<script type="text/javascript" src="js/ajax.js"></script>
			<script type="text/javascript" src="js/_crime.js"></script>
	</body>
  
</html>