<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeadMaster Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
	<style>
	
	</style>

    <!-- Favicon -->
    <link href="asset4/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="asset4/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="asset4/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="asset4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="asset4/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                @role('Teacher')
                    <h3 class="text-primary">Teacher Dashboard</h3>
                @endrole
                @role('Headmaster')
                    <h3 class="text-primary">HeadMaster</h3>
                @endrole
                </a>
                <!-- no 
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                
                </div>
                -->

                <div class="navbar-nav w-100">
                    <a href="{{ URL('dashboard') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    @role('Teacher')
                          <a href="{{ URL('transfers') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Search</a>
                    @endrole
                   
                    
            
                     
                        @role('Teacher')
                              <a href="{{ URL('letters1') }}"  class="nav-item nav-link">New Request</a>
                        @endrole
                           
                            
                          
                           
                      
                  
                 
                  
                    <a href="{{ URL('letters3') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Swapping</a>
                    <a href="{{ URL('letters1') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Chance</a>    
                    <a href="{{ URL('letters') }}"  class="nav-item nav-link">Chance</a>
                </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
               
                <!--MESSAGE-->
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                       
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                           
                            <hr class="dropdown-divider">
                           
                            <hr class="dropdown-divider">
                           
                            <hr class="dropdown-divider">
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                       
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                           
                            <hr class="dropdown-divider">
                            
                            <hr class="dropdown-divider">
                          
                            <hr class="dropdown-divider">
                           
                        </div>
                        
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="asset4/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            @role('Headmaster')
                            <span class="d-none d-lg-inline-flex">{{ __('HeadMaster') }}({{Auth::user()->name}})</span>
                            @endrole
                            @role('Teacher')
                            <span class="d-none d-lg-inline-flex">{{ __('HeadMaster') }}({{Auth::user()->name}})</span>
                            @endrole
                          
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ URL('Headmaster_dash') }}"  class="dropdown-item">My Profile</a>
                           
							<form method="POST" action="{{ route('logout') }}">
																	@csrf
                            <a href="route('logout')" class="dropdown-item" onclick="event.preventDefault();
																						this.closest('form').submit();">	{{ __('LogOut') }}</a>
                    	</form>    
					</div>
                    </div>
                </div>
            </nav>

            <style>
              
                td{
                    background-color: white;
                    height:45px;
                    width:145px;
                }
              
               
                h1{
                    padding-left:250px;
                }
            </style>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
           
            

          
					<h4>
					
				
					</h4>
              
                    @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Onprogress </h2>
            </div>
            <table class="table table-bordered table-responsive-lg">
                                <form action="{{ url('form1') }}" method="GET" role="search">
                                                    <div class="input-group">
                                                        <table  class="table table-bordered table-responsive-lg">
                                                    <tr>
                                                        <input type="hidden" name="status" value="3"></input>
                                                       
                                                    <td colspan="3">  <input type="text" class="form-control mr-2" name="term1" placeholder="Search name " id="term">
                                                            <a href="{{ route('transfers.index') }}" class=" mt-1"></td>
                                                            <td colspan="3">  <input type="text" class="form-control mr-2" name="term2" placeholder="Search  ward " id="term">
                                                            <a href="{{ route('transfers.index') }}" class=" mt-1"></td>
                                                        <td colspan="3">	<button class="btn btn-info" type="submit" title="Search users"><br>
                                                                <span class="fas fa-search"></span>
                                                                </button></td>
                                                                <td></td>	
                                                    
                                                            
                                                    </tr>
                                                    </table>
                                                    
                                    
                                </form>
           
        </div>
    </div>
    <div class="pull-left">
    <form action="{{ route('schools.index') }}" method="GET" role="search">

                  

   @if(Auth::user()->hasRole('Teacher'))
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <h1 class="h3 mb-2 text-gray-800"></h1>
   
   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Search other request</h6>
                       </div>
                       <div class="card-body">
                           <div class="table-responsive">
                               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>current school</th>
            <th>current disctric</th>
            <th>transfer district</th>
           
            <th>description</th>
            <th>HeadMaster_Action</th>
            <th>WEO_Action</th>
            <th>DEO_Action</th>
            
            <th width="280px">Action</th>
        </tr>
            </thead>
            <tfoot>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>current school</th>
            <th>current disctric</th>
            <th>transfer district</th>
           
            <th>description</th>
            <th>HeadMaster_Action</th>
            <th>WEO_Action</th>
            <th>DEO_Action</th>
            
            <th width="280px">Action</th>
        </tr>
            </tfoot>
            </tbody>

      
        @foreach ($letters as $letter)
        @foreach ($schools as $school)
      
          
            
            @if($letter->name==Auth::user()->name &&  $letter->cschool==$school->name && $i<1)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->cschool }}</td>
                <td>{{ $letter->cdistrict }}</td>
                <td>{{ $letter->tdistrict }}</td>
                <td>{{ $letter->description }}</td>
                @if( $letter->Headmaster == 'Not_support BY HEADMASTER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->Headmaster == 'support BY HEADMASTER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
                @if( $letter->WEO == 'Not_support BY WEO')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->WEO == 'support BY WEO')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
                @if( $letter->DEO == 'Not_support BY District_Education_Officer')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->DEO == 'support BY District_Education_Officer')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif

                @if( $letter->DED == 'Not_support BY District_Executive_Director')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->DED == 'support BY District_Executive_Director')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
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
                     </form>
                     </form>
                </td>
            </tr>
           
             @endif 
           
             @endforeach
             @endforeach
    </tbody>
   </table>
 </div>
</div>
    @endif
    @if(Auth::user()->hasRole('Headmaster'))
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table  class="table table-striped">
        <tr>
        <td>No</td>
            <td>Name</td>
            <td>current school</td>
            <td>current disctrict</td>
            <td>transfer district</td>
           
            <td>description</td>
            <td>Headmaster_support</td>
           
            
            <td>Action</td>
        </tr>
      
        @foreach ($letters as $letter)
        @foreach ($schools as $school)
      
            <tr>
            
            @if($school->Headmaster==Auth::user()->name && $letter->cschool==$school->name)
           
                <td>{{ ++$i}}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->cschool }}</td>
                <td>{{ $letter->cdistrict }}</td>
                <td>{{ $letter->tdistrict }}</td>
                <td>{{ $letter->description }}</td>
                @if( $letter->Headmaster == 'Not_support BY HEADMASTER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->Headmaster == 'support BY HEADMASTER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
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
        @endforeach
   


    </table>
    @endif
    @if(Auth::user()->hasRole('Weo'))
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr style="background-color:gray;" >
            <th>No</th>
            <th>Name</th>
            <th>current school</th>
            <th>current disctrict</th>
            <th>transfer district</th>
            <th>HeadMaster_Action</th>
            <th>WEO_Action</th>
            <th>description</th>
            
            <th width="280px">Action</th>
        </tr>
      
        @foreach ($letters as $letter)
        @foreach ($wards as $ward)
      
            <tr style="background-color:white;">
            
            @if($ward->WEO==Auth::user()->name && $letter->ward==$ward->name)
          
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->cschool }}</td>
                <td>{{ $letter->cdistrict }}</td>
                <td>{{ $letter->tdistrict }}</td>
                <td>{{ $letter->description }}</td>
                <td>
                @if( $letter->Headmaster == 'Not_support BY HEADMASTER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->Headmaster == 'support BY HEADMASTER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
               
                @endif
                @if( $letter->WEO == 'Not_support BY WEO')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->WEO == 'support BY WEO')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
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
        @endforeach
    </tbody>
   </table>
 </div>
</div>
    @endif
    @role('DED')
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
            <tr style="background-color:white">
            
            @if($district->DED==Auth::user()->name && Auth::user()->hasRole('DED') && $letter->cdistrict ==$district->name)
          
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
   @endrole 
   @role('DEO')
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
            <tr style="background-color:white">
            
            @if($district->DEO==Auth::user()->name && $letter->cdistrict ==$district->name)
          
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
   @endrole 
   



</div>
			</div>
               
            <!-- Recent Sales End -->


            <!-- Widgets Start
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">To Do List</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="d-flex mb-2">
                                <input class="form-control bg-transparent" type="text" placeholder="Enter task">
                                <button type="button" class="btn btn-primary ms-2">Add</button>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Short task goes here...</del></span>
                                        <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           End -->


            <!-- Footer Start -->
         
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="asset4/lib/chart/chart.min.js"></script>
    <script src="asset4/lib/easing/easing.min.js"></script>
    <script src="asset4/lib/waypoints/waypoints.min.js"></script>
    <script src="asset4/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="asset4/lib/tempusdominus/js/moment.min.js"></script>
    <script src="asset4/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="asset4/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="asset4/js/main.js"></script>
</body>

</html>