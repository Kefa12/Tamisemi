@extends('layouts.layout')

@section('content')
<style>
        .container{
                    
                   margin-top:0px;
                  
                   
                    border: 2px solid blue; 
                   border-radius: 15px;
                   padding-top:10px;
                   width:423px;
                  
                } 
               input{
                padding-top:178px;
                position: relative;
                     top: -230px;
              
            }
        
    </style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
              
            </div>
         
        </div>
    </div>
    
 <div class="form3">
<div class="form2">
     <div class="form1">
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
   

   

@role('Tamisemi_Director')
<style>
.container{
                    
                  
                   
                    background-color:white;
                     border: 2px solid white; 
                    border-radius: 15px;
                    padding-top:-1110px;
                    width:423px;
                   
                 }
                 form{
                     padding-top:-2123px;
                     position: relative;
                     top: -230px;
                 }
                 .col-md-4{
                     background-color:blue;
                 }
  </style> 
   <form action="{{ route('chances.update', $chance->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $chance->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="RD_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="school" value="{{ $chance->school }}"
                        placeholder="mwenge"></input>
                </div>
                <div class="form-group">
                 
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="district" value="{{ $chance->district}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$chance->description}}"
                        placeholder="description"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
                </div>
            </div>
          
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ $chance->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                   
                </div>
            </div>
               
              
              
               <input type="hidden" class="form-control" style="height:50px" name="position"    value="Headmaster"
               ></input>        
               <input type="hidden" class="form-control" style="height:50px" name="WEO"    value="{{$chance->WEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DEO"    value="{{$chance->DEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$chance->DED}}"
                       ></input>
              <!-- <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$chance->Regional_Director}}"
                       ></input> -->
  
                      
                     
  

<input type="hidden" class="form-control" style="height:50px" name="ward"    value="{{$chance->ward}}"
                       ></input>
   


<input type="hidden" class="form-control" style="height:50px" name="regional"    value="{{$chance->regional}}"
                       ></input>
                       <input type="hidden" class="form-control" style="height:50px" name="status"    value="5"></input>
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


            
            <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0" style="width:800;">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
           
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Transfer Request Details</h6>
                <hr class="mt-0 mb-4">
                <h6><b>Current_status</b></h6>
              
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    @if($chance->hospital=="pending")
                    <h6>School</h6>
                    <p class="text-muted">{{$chance->school}}</p>
                    
                    @else
                    <h6>Hospital</h6>
                    <p class="text-muted">{{$chance->hospital}}</p>
                    
                    @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>ward</h6>
                    <p class="text-muted">{{$chance->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$chance->district}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$chance->regional}}</p>
                  </div>
                </div>
              
              
             
                
                <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                  @if($chance->hospital=="pending")
                    <h6>Headmaster</h6>
                    @if( $chance->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->Headmaster  == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
             
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
               
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
            <div class="col-6 mb-3">
                    <h6>Administrator</h6>
                    @if( $chance->Tamisemi== 'Rejected BY Tamisemi_Director')
                    <button type="submit" class="btn btn-danger" style="width: 187px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">Not_support</i></button>
            @elseif( $chance->Tamisemi == 'Approved BY Tamisemi_Director')
          
          <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
       
         @else
        
          <button type="submit" class="btn btn-success"><i>pending</i></button>
        
        
         @endif
                  </div>
                </div>
                <h6><b>Administrator</b></h6>
                <hr class="mt-0 mb-4">
  
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">Administrator Approved
                <select name="Tamisemi" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="Approved BY Tamisemi_Director"><p style="color:blue;">APPROVED</p></option>
                        <option value="Rejected BY Tamisemi_Director"><p style="color:red;">REJECTED</p></option>
                </select>
                </div>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Approved / Rejected</button>
            </div>
          </form>
      @else     
            <h6>Doctor_in_Charge</h6>
                    @if( $chance->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->Headmaster  == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                 
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_Medical_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DMO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
               
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
            <div class="col-6 mb-3">
                    <h6>Administrator</h6>
                    @if( $chance->Tamisemi== 'Rejected BY Tamisemi_Director')
                    <button type="submit" class="btn btn-danger" style="width: 187px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">Not_support</i></button>
            @elseif( $chance->Tamisemi == 'Approved BY Tamisemi_Director')
          
          <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
       
         @else
        
          <button type="submit" class="btn btn-success"><i>pending</i></button>
        
        
         @endif
                  </div>
                </div>
                <h6><b>Administrator</b></h6>
                <hr class="mt-0 mb-4">
  
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">Administrator Approved
                <select name="Tamisemi" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="Approved BY Tamisemi_Director"><p style="color:blue;">APPROVED</p></option>
                        <option value="Rejected BY Tamisemi_Director"><p style="color:red;">REJECTED</p></option>
                </select>
                </div>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Approved / Rejected</button>
            </div>
          </form>
        @endif
          
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
            </div>
          
        </div>
    </div>
</div>




@endrole

@role('Weo')
<style>
.container{
                    
                  
                   
                    background-color:white;
                     border: 2px solid white; 
                    border-radius: 15px;
                    padding-top:-1110px;
                    width:423px;
                   
                 }
                 form{
                     padding-top:-2123px;
                     position: relative;
                     top: -230px;
                 }
                 .col-md-4{
                     background-color:blue;
                 }
  </style> 
   <form action="{{ route('chances.update', $chance->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $chance->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="RD_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="school" value="{{ $chance->school }}"
                        placeholder="mwenge"></input>
                </div>
                <div class="form-group">
                 
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="district" value="{{ $chance->district}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$chance->description}}"
                        placeholder="description"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
                </div>
            </div>
          
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ $chance->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                   
                </div>
            </div>
               
              
              
               <input type="hidden" class="form-control" style="height:50px" name="position"    value="Headmaster"
               ></input>        
               <input type="hidden" class="form-control" style="height:50px" name="WEO"    value="{{$chance->WEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DEO"    value="{{$chance->DEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$chance->DED}}"
                       ></input>
              <!-- <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$chance->Regional_Director}}"
                       ></input> -->
  
                      
                     
  

<input type="hidden" class="form-control" style="height:50px" name="ward"    value="{{$chance->ward}}"
                       ></input>
   


<input type="hidden" class="form-control" style="height:50px" name="regional"    value="{{$chance->regional}}"
                       ></input>
                       <input type="hidden" class="form-control" style="height:50px" name="status"    value="5"></input>
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


            
            <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0" style="width:800;">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
           
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Transfer Request Details</h6>
                <hr class="mt-0 mb-4">
                <h6><b>Current_status</b></h6>
              
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>School</h6>
                    <p class="text-muted">{{$chance->school}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>ward</h6>
                    <p class="text-muted">{{$chance->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$chance->district}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$chance->regional}}</p>
                  </div>
                </div>
              
              
             
                
                <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Headmaster</h6>
                    @if( $chance->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->Headmaster  == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
            <div class="col-6 mb-3">
                    <h6>Administrator</h6>
                    @if( $chance->Tamisemi== 'Rejected BY Tamisemi_Director')
                    <button type="submit" class="btn btn-danger" style="width: 187px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">Not_support</i></button>
            @elseif( $chance->Tamisemi == 'Approved BY Tamisemi_Director')
          
          <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
       
         @else
        
          <button type="submit" class="btn btn-success"><i>pending</i></button>
        
        
         @endif
                  </div>
                </div>
                <h6><b>Administrator</b></h6>
                <hr class="mt-0 mb-4">
  
                <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="hidden" name="status" value="0">
                <div class="form-group">WEO support
                <select name="WEO" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY WEO"><p style="color:blue;">Support</p></option>
                        <option value="Not_support BY WEO"><p style="color:red;">Not_support</p></option>
                </select>
                </div>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Approved / Rejected</button>
            </div>
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
            </div>
          
        </div>
    </div>
</div>




@endrole
@role('DEO')
<style>
.container{
                    
                  
                   
                    background-color:white;
                     border: 2px solid white; 
                    border-radius: 15px;
                    padding-top:-1110px;
                    width:423px;
                   
                 }
                 form{
                     padding-top:-2123px;
                     position: relative;
                     top: -230px;
                 }
                 .col-md-4{
                     background-color:blue;
                 }
  </style> 
   <form action="{{ route('chances.update', $chance->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $chance->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="RD_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="school" value="{{ $chance->school }}"
                        placeholder="mwenge"></input>
                </div>
                <div class="form-group">
                 
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="district" value="{{ $chance->district}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$chance->description}}"
                        placeholder="description"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
                </div>
            </div>
          
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ $chance->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                   
                </div>
            </div>
               
              
              
               <input type="hidden" class="form-control" style="height:50px" name="position"    value="Headmaster"
               ></input>        
               <input type="hidden" class="form-control" style="height:50px" name="WEO"    value="{{$chance->WEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DEO"    value="{{$chance->DEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$chance->DED}}"
                       ></input>
              <!-- <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$chance->Regional_Director}}"
                       ></input> -->
  
                      
                     
  

<input type="hidden" class="form-control" style="height:50px" name="ward"    value="{{$chance->ward}}"
                       ></input>
   


<input type="hidden" class="form-control" style="height:50px" name="regional"    value="{{$chance->regional}}"
                       ></input>
                       <input type="hidden" class="form-control" style="height:50px" name="status"    value="5"></input>
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


            
            <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0" style="width:800;">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
           
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Transfer Request Details</h6>
                <hr class="mt-0 mb-4">
                <h6><b>Current_status</b></h6>
              
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>School</h6>
                    <p class="text-muted">{{$chance->school}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>ward</h6>
                    <p class="text-muted">{{$chance->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$chance->district}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$chance->regional}}</p>
                  </div>
                </div>
              
              
             
                
                <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Headmaster</h6>
                    @if( $chance->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->Headmaster  == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
            <div class="col-6 mb-3">
                    <h6>Administrator</h6>
                    @if( $chance->Tamisemi== 'Rejected BY Tamisemi_Director')
                    <button type="submit" class="btn btn-danger" style="width: 187px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">Not_support</i></button>
            @elseif( $chance->Tamisemi == 'Approved BY Tamisemi_Director')
          
          <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
       
         @else
        
          <button type="submit" class="btn btn-success"><i>pending</i></button>
        
        
         @endif
                  </div>
                </div>
                <h6><b>District_officer</b></h6>
                <hr class="mt-0 mb-4">
  
                <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="hidden" name="status" value="1">
                <div class="form-group">DEO support
                <select name="DEO" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY District_Education_Officer"><p style="color:blue;">Support</p></option>
                        <option value="Not_support BY District_Education_Officer"><p style="color:red;">Not_support</p></option>
                </select>
                </div>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Approved / Rejected</button>
            </div>
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
            </div>
          
        </div>
    </div>
</div>




@endrole
@role('DMO')
<style>
.container{
                    
                  
                   
                    background-color:white;
                     border: 2px solid white; 
                    border-radius: 15px;
                    padding-top:-1110px;
                    width:423px;
                   
                 }
                 form{
                     padding-top:-2123px;
                     position: relative;
                     top: -230px;
                 }
                 .col-md-4{
                     background-color:blue;
                 }
  </style> 
   <form action="{{ route('chances.update', $chance->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $chance->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="RD_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="school" value="{{ $chance->school }}"
                        placeholder="mwenge"></input>
                </div>
                <div class="form-group">
                 
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="district" value="{{ $chance->district}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$chance->description}}"
                        placeholder="description"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
                </div>
            </div>
          
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ $chance->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                   
                </div>
            </div>
               
              
              
               <input type="hidden" class="form-control" style="height:50px" name="position"    value="Headmaster"
               ></input>        
               <input type="hidden" class="form-control" style="height:50px" name="WEO"    value="{{$chance->WEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DEO"    value="{{$chance->DEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$chance->DED}}"
                       ></input>
              <!-- <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$chance->Regional_Director}}"
                       ></input> -->
  
                      
                     
  

<input type="hidden" class="form-control" style="height:50px" name="ward"    value="{{$chance->ward}}"
                       ></input>
   


<input type="hidden" class="form-control" style="height:50px" name="regional"    value="{{$chance->regional}}"
                       ></input>
                       <input type="hidden" class="form-control" style="height:50px" name="status"    value="5"></input>
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


            
            <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0" style="width:800;">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
           
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Transfer Request Details</h6>
                <hr class="mt-0 mb-4">
                <h6><b>Current_status</b></h6>
              
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>School</h6>
                    <p class="text-muted">{{$chance->school}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>ward</h6>
                    <p class="text-muted">{{$chance->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$chance->district}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$chance->regional}}</p>
                  </div>
                </div>
              
              
             
                
                <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Headmaster</h6>
                    @if( $chance->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->Headmaster  == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
            <div class="col-6 mb-3">
                    <h6>Administrator</h6>
                    @if( $chance->Tamisemi== 'Rejected BY Tamisemi_Director')
                    <button type="submit" class="btn btn-danger" style="width: 187px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">Not_support</i></button>
            @elseif( $chance->Tamisemi == 'Approved BY Tamisemi_Director')
          
          <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
       
         @else
        
          <button type="submit" class="btn btn-success"><i>pending</i></button>
        
        
         @endif
                  </div>
                </div>
                <h6><b>District_officer</b></h6>
                <hr class="mt-0 mb-4">
  
                <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="hidden" name="status" value="1">
                <div class="form-group">District_officer support
                <select name="DMO" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY DMO"><p style="color:blue;">Support</p></option>
                        <option value="Not_support BY DMO"><p style="color:red;">Not_support</p></option>
                </select>
                </div>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Approved / Rejected</button>
            </div>
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
            </div>
          
        </div>
    </div>
</div>




@endrole
@role('DED')
<style>
.container{
                    
                  
                   
                    background-color:white;
                     border: 2px solid white; 
                    border-radius: 15px;
                    padding-top:-1110px;
                    width:423px;
                   
                 }
                 form{
                     padding-top:-2123px;
                     position: relative;
                     top: -230px;
                 }
                 .col-md-4{
                     background-color:blue;
                 }
  </style> 
   <form action="{{ route('chances.update', $chance->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $chance->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="RD_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="school" value="{{ $chance->school }}"
                        placeholder="mwenge"></input>
                </div>
                <div class="form-group">
                 
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="district" value="{{ $chance->district}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$chance->description}}"
                        placeholder="description"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
                </div>
            </div>
          
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ $chance->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                   
                </div>
            </div>
               
              
              
               <input type="hidden" class="form-control" style="height:50px" name="position"    value="Headmaster"
               ></input>        
               <input type="hidden" class="form-control" style="height:50px" name="WEO"    value="{{$chance->WEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DEO"    value="{{$chance->DEO}}"
                       ></input>
              
              <!-- <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$chance->Regional_Director}}"
                       ></input> -->
  
                      
                     
  

<input type="hidden" class="form-control" style="height:50px" name="ward"    value="{{$chance->ward}}"
                       ></input>
   


<input type="hidden" class="form-control" style="height:50px" name="regional"    value="{{$chance->regional}}"
                       ></input>
                       <input type="hidden" class="form-control" style="height:50px" name="status"    value="5"></input>
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


            
            <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0" style="width:800;">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
           
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Transfer Request Details</h6>
                <hr class="mt-0 mb-4">
                <h6><b>Current_status</b></h6>
              
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>School</h6>
                    <p class="text-muted">{{$chance->school}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>ward</h6>
                    <p class="text-muted">{{$chance->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$chance->district}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$chance->regional}}</p>
                  </div>
                </div>
              
              
             
                
                <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Headmaster</h6>
                    @if( $chance->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->Headmaster  == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->Regional_Director == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
            <div class="col-6 mb-3">
                    <h6>Administrator</h6>
                    @if( $chance->Tamisemi== 'Rejected BY Tamisemi_Director')
                    <button type="submit" class="btn btn-danger" style="width: 187px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">Not_support</i></button>
            @elseif( $chance->Tamisemi == 'Approved BY Tamisemi_Director')
          
          <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
       
         @else
        
          <button type="submit" class="btn btn-success"><i>pending</i></button>
        
        
         @endif
                  </div>
                </div>
                <h6><b>District_Director</b></h6>
                <hr class="mt-0 mb-4">
  
                <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="hidden" name="status" value="2">
                <div class="form-group">DED support
                <select name="DED" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY District_Executive_Director"><p style="color:blue;">Support</p></option>
                        <option value="Not_support BY District_Executive_Director"><p style="color:red;">Not_support</p></option>
                </select>
                </div>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">support / Not_support</button>
            </div>
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
            </div>
          
        </div>
    </div>
</div>




@endrole
@role('Regional_Director')
<style>
.container{
                    
                  
                   
                    background-color:white;
                     border: 2px solid white; 
                    border-radius: 15px;
                    padding-top:-1110px;
                    width:423px;
                   
                 }
                 form{
                     padding-top:-2123px;
                     position: relative;
                     top: -230px;
                 }
                 .col-md-4{
                     background-color:blue;
                 }
  </style> 
   <form action="{{ route('chances.update', $chance->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $chance->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="RD_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="school" value="{{ $chance->school }}"
                        placeholder="mwenge"></input>
                </div>
                <div class="form-group">
                 
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="district" value="{{ $chance->district}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$chance->description}}"
                        placeholder="description"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
                </div>
            </div>
          
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ $chance->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                   
                </div>
            </div>
               
              
              
               <input type="hidden" class="form-control" style="height:50px" name="position"    value="Headmaster"
               ></input>        
               <input type="hidden" class="form-control" style="height:50px" name="WEO"    value="{{$chance->WEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DEO"    value="{{$chance->DEO}}"
                       ></input>
              
              <!-- <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$chance->Regional_Director}}"
                       ></input> -->
  
                      
                     
  

<input type="hidden" class="form-control" style="height:50px" name="ward"    value="{{$chance->ward}}"
                       ></input>
   


<input type="hidden" class="form-control" style="height:50px" name="regional"    value="{{$chance->regional}}"
                       ></input>
                       <input type="hidden" class="form-control" style="height:50px" name="status"    value="5"></input>
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


            
            <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0" style="width:800;">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
           
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Transfer Request Details</h6>
                <hr class="mt-0 mb-4">
                <h6><b>Current_status</b></h6>
              
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    @if($chance->school!='pending')
                    <h6>School</h6>
                    <p class="text-muted">{{$chance->school}}</p>
                    @else
                    <h6>Hospital</h6>
                    <p class="text-muted">{{$chance->hospital}}</p>
                    @endif

                  </div>
                  <div class="col-6 mb-3">
                    <h6>ward</h6>
                    <p class="text-muted">{{$chance->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$chance->district}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$chance->regional}}</p>
                  </div>
                </div>
              
              
             
                
                <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Headmaster</h6>
                    @if( $chance->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->Headmaster  == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Ward_officer</h6>
                    @if( $chance->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $chance->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $chance->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $chance->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $chance->RD== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $chance->RD == 'support BY RD')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
            <div class="col-6 mb-3">
                    <h6>Administrator</h6>
                    @if( $chance->Tamisemi== 'Rejected BY Tamisemi_Director')
                    <button type="submit" class="btn btn-danger" style="width: 187px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">Not_support</i></button>
            @elseif( $chance->Tamisemi == 'Approved BY Tamisemi_Director')
          
          <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
       
         @else
        
          <button type="submit" class="btn btn-success"><i>pending</i></button>
        
        
         @endif
                  </div>
                </div>
                <h6><b>Regional_Director</b></h6>
                <hr class="mt-0 mb-4">
  
                <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="hidden" name="status" value="3">
                <div class="form-group">Regional_Director support
                <select name="RD" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY RD"><p style="color:blue;">Support</p></option>
                        <option value="Not_support BY RD"><p style="color:red;">Not_support</p></option>
                </select>
                </div>
            </div>
              
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">support / Not_support</button>
            </div>
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
            </div>
          
        </div>
    </div>
</div>




@endrole


@endsection
