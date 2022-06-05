<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
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
                    <h3 class="text-primary"> Teacher </h3>
                @endrole
                @role('Weo')
                    <h3 class="text-primary"> Ward_Officer</h3>
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
                   
                    @endrole
                   
                
                        @role('Teacher')  
                      
                            <a href="{{ URL('letters1') }}"  class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>New Request</a>
                            <a href="{{ URL('letters') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Onprogress</a>
                            <a href="{{ URL('letters3') }}"  class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Swapping Request</a>
                        @endrole
                        @role('Weo')
                        <a href="{{ URL('letters') }}" class="dropdown-item">Onprogress Request</a>
                        @endrole
                          
                        
                        </div>
                    
                  
                   
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
                      
                       
                    </div>
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="asset4/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            @role('Teacher')
                            <span class="d-none d-lg-inline-flex">{{ __('Teacher') }}({{Auth::user()->name}})</span>
                            @endrole
                            @role('Weo')
                            <span class="d-none d-lg-inline-flex">{{ __('WEO') }}({{Auth::user()->name}})</span>
                            @endrole
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ URL('Teachdash1') }}" class="dropdown-item">My Profile</a>
                           
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
                    padding-left:50px;
                }
            </style>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
           
            

          
         
			
					
                   
                    <div class="row">
        <div class="col-lg-12 margin-tb">

   
      
           
            <h1>Request Onprogress</h1>
        </div>
    </div>


  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" />
     <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');*{margin: 0;padding: 0;box-sizing: border-box;list-style: none;font-family: 'Montserrat', sans-serif}body{padding: 10px}.topnav{background-color: #ffff;overflow: hidden}.far.fa-user-circle{font-size: 29px;color: #726f6f;padding-top: 10px}.input-10{width: 40px;color: #4c4c96;font-weight: 600}.fas.fa-search{display: flex;flex-direction: column;align-items: center;justify-content: center;background-color: lightsalmon;height: 100%}.topnav a{float: left;display: block;color: #8d8b8b;font-weight: 800;font-size: 14px;text-transform: uppercase;padding: 14px 16px;text-decoration: none;border-bottom: 3px solid transparent}.topnav a:hover{color: black;border-bottom: 3px solid red}.topnav .active{color: black;border-bottom: 3px solid red}form.example input[type=text]{padding: 10px;font-size: 17px;border: 1px solid grey;float: left;width: 90%;height: 36px;background: #fff}form.example input[type=text]:focus{outline: none}form.example button{float: left;width: 10%;height: 36px;padding: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;background: #4c4c96;color: white;font-size: 14px;border: 1px solid grey;border-left: none;cursor: pointer}.navbar-toggler:focus{box-shadow: none;outline: none;border: none}::placeholder{font-size: 10px}form.example button:hover{background: #0b7dda}form.example::after{content: "";clear: both;display: table}.container .table-responsive{margin: 20px auto;overflow-x: auto}.container .table-responsive::-webkit-scrollbar{height: 5px}.container .table-responsive::-webkit-scrollbar-thumb{border-radius: 5px;background-image: linear-gradient(to right, #5D7ECD, #0C91E6)}.table thead tr th{font-size: 11px;color: #868585;padding: 10px 10px}.table tbody tr td{font-size: 13.5px;padding: 10px 10px}#navbar{width: 20%;background-color: #21214e !important;height: 50px;border: none}.bg-blight{color: #7f7fee;font-weight: 600}.bg-bdark{color: #4c4c96;font-weight: 600}#navbar a{color: white}.fas.fa-bars{color: white}#navbar2{width: 80%}#navbar-items{width: 20%;height: 500px;background-color: #4f4f8a}ul#navbar-items li{color: #b6b5b5;padding: 15px 25px;font-weight: 600;text-transform: uppercase;font-size: 10px;display: flex;align-items: center}ul li .fas{font-size: 16px}ul#navbar-items li:hover{background-color: #21214e;color: white}ul li:hover .fas{color: #f7910c}#topnavbar{width: 80%}.fs13{font-size: 13px}.fs14{font-size: 18px;color: white}.fas.fa-times{color: red}.fas.fa-check{color: greenyellow}.example{width: 50%}@media(max-width:780px){#navbar{width: 20%}#topnavbar{width: 80%}.text-decoration-none.fs14{font-size: 10px}.text-decoration-none .fs13{font-size: 9px}}@media(max-width:430px){#navbar-items, #topnavbar{width: 100%;height: 100%}#navbar-items{padding: 20px;margin-bottom: 30px}.topnav a{font-size: 12px;padding: 12px}#navbar{width: 100%;background-color: blue}.example{width: 100%}.text-decoration-none.fs14{font-size: 14px}.text-decoration-none .fs13{font-size: 13px}}@media(max-width:376px){#navbar-items{padding: 20px;margin-bottom: 30px}.topnav a{font-size: 12px;padding: 7px}}@media(max-width:320px){.topnav a{font-size: 10px;padding: 4px}}
    .gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));


/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style> 
    <form action="{{ route('letters.index') }}" method="GET" role="search">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <section class="vh-100" style="background-color: #f4f5f7;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0" style="width:800;">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            
 @foreach ($letters as $letter)
 @if(($letter->Tamisemi !="Approved BY Tamisemi_Director"))
  @if($letter->author=="unknown" && $letter->name==Auth::user()->name && $letter->Employee_id==Auth::user()->Employee_id)
  <div class="col-md-8">
              <div class="card-body p-4">
                  

</div>
</div>
            <th>No</th>
            <td>{{ ++$i }}</td>
            <th>Name</th>
            <th>Approve_status</th>
            <th>Comments</th>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $letter->name }}</td>
           
           
        </tr>
        <tr>
            <th>current school</th>
            <td>{{ $letter->cschool }}</td>
            <th>HeadMaster_Action</th>
            
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
            <td>{{ $letter->H_comment }}</td>
           
        </tr>
        <tr>
            <th>Transfer school</th>
            <td>{{ $letter->tschool }}</td>
            
        </tr>
        <tr>
            <th>current ward</th>
            <td>{{ $letter->ward }}</td>
            <th>WEO_Action</th>
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
        </tr>
        <tr>
            <th>current disctrict</th>
            <td>{{ $letter->cdistrict }}</td>
            <th>DEO_Action</th>
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
        </tr>
        <tr>
            <th>transfer district</th>
            <td>{{ $letter->tdistrict }}</td>
            <th>DED_Action</th>
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
        </tr>
        <tr>
            <th>description</th>
            <td>{{ $letter->description }}</td>
            <th width="280px">Action</th>
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
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <br/>
    <h2>NUMBER DAY FOR REQUEST RESPOND</h2>
    <table  class="table table-striped w-auto">
      
    <tr style="border: none; color:white;">
                  <th>Description</th>
                  <th>Number Of day To respond</th>
            </tr>
              <tr>
                  <th>LIFE TIME FOR REQUEST</th>
                  <td>{{ abs(round((strtotime($date2)-strtotime($letter->created_at))/86400)) }}</td>
            </tr>
            <tr>
                  <th>HEADMASTER RESPOND TIME TAKEN</th>
                  @if($letter->T_date=='0000-00-00')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->T_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>WEO RESPOND TIME TAKEN</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>DEO RESPOND TIME TAKEN</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>DED RESPOND TIME TAKEN</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>RED RESPOND TIME TAKEN</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
              </tr>
              <th>
               
                 
                
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>

    </table>
    </form>
          
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>
       
 @elseif($letter->name==Auth::user()->name )
     @foreach ($letters as $letter)
          
           
            @if(($letter->name==Auth::user()->name || !(Auth::user()->hasRole(['Teacher'])))) 
         
            <table  class="table table-striped" style="padding-top:0px;">
        <tr>
            <td>No</td>
            <td>{{ ++$i }}</td>
            <td>Name</td>
            <td>Approve_status</td>
            <td>Comment</td>
        <tr>
            <th>Name</th>
            <td>{{ $letter->name }}</td>
            <th>Teacher From another school</th>
           
            
            @if( $letter->Teacher_support == 'Not_support BY TEACHER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger"> Not_support</button>
                </div></td>
               @elseif( $letter->Teacher_support == 'support BY TEACHER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
                @endif
             <td>{{ $letter->T_comment }}</td>
           
        </tr>
        <tr>
            <th>current school</th>
            <td>{{ $letter->cschool }}</td>
            <th>HeadMaster_Action</th>
            
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
            <td>{{ $letter->H_comment }}</td>
           
        </tr>
        <tr>
            <th>Transfer school</th>
            <td>{{ $letter->tschool }}</td>
            <th>HeadMaster From another school</th>         
            @if( $letter->Transfer_Headmaster == 'Not_support BY HEADMASTER')
                <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger">Not_support</button>
                </div></td>
               @elseif( $letter->Transfer_Headmaster == 'support BY HEADMASTER')
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">support</button>
                </div></td>
                @else
                 <td><div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-success">PENDING</button>
                </div></td>
                @endif
        </tr>
        <tr>
            <th>current ward</th>
            <td>{{ $letter->ward }}</td>
            <th>WEO_Action</th>
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
        </tr>
        <tr>
            <th>current disctrict</th>
            <td>{{ $letter->cdistrict }}</td>
            <th>DEO_Action</th>
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
        </tr>
        <tr>
            <th>transfer district</th>
            <td>{{ $letter->tdistrict }}</td>
            <th>DED_Action</th>
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
        </tr>
        <tr>
            <th>description</th>
            <td>{{ $letter->description }}</td>
            <th width="280px">Action</th>
            <td>
              
              <form action="{{ route('letters.destroy', $letter->id) }}" method="POST">

                 
                  @role('Tamisemi_Director')
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
        <tr>
          
           
        </tr>
              
                
                
              
            </tr>
          
         
    </table>
    <h2>TIME TAKEN TO RESPOND REQUEST</h2>
    <table  class="table table-striped" style="padding-top:0px;">
        <tr>
            <td><strong>Description</strong></td>
            <td>Number Of day To respond</td>
            
        <tr>
    
              <tr>
                  <th>LIFE TIME FOR REQUEST</th>
                  <td>{{ abs(round((strtotime($date2)-strtotime($letter->created_at))/86400)) }}</td>
            </tr>
            <tr>
                  <th>HEADMSTER RESPOND TIME TAKEN</th>
                  @if($letter->Headmaster=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->T_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>WEO RESPOND TIME TAKEN</th>
                  @if($letter->WEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->W_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>DEO RESPOND TIME TAKEN</th>
                  @if($letter->DEO=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->DEO_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>DED RESPOND TIME TAKEN</th>
                  @if($letter->DED=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->DED_date)-strtotime($letter->created_at))/86400)) }}</td>
                  @endif
            </tr>
            <tr>
                  <th>RED RESPOND TIME TAKEN</th>
                  @if($letter->Regional_Director=='pending')
                  <td>not respond</td>
                  @else
                  <td>The day late to proved is {{ abs(round((strtotime($letter->created_at)-strtotime($letter->RD_date))/86400)) }}</td>
                  @endif
              </tr>
              <th>
               
                 
                
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>

    </table>
           @endif 
        @endforeach

    @else
      
 
    @endif
    @else
    
     @if(($letter->name==Auth::user()->name))
      
     <h1><span style="color:blue">Congratration!</span> Successfully transfer request<h1>
     @endif
@endif
 @endforeach

  





  



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