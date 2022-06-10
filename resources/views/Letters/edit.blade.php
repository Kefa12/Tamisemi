
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
   
    @role('Teacher')

    <h2> Swapping teacher, {{ $letter->name }} </h2>

    @if(!($letter->author==Auth::user()->name))
     <form action="{{ URL('letters2'), $letter->id}}" method="GET">
     <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" name="author"  value="{{ $letter->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                  
                  <input type="hidden" class="form-control" style="height:50px"  name="Teacher_approved"  value="pending"  
                      placeholder="description"></input>
              </div>
              <div class="form-group">
                   
                   <input type="hidden" class="form-control" style="height:50px" name="WEO"  value="pending" 
                       ></input>
                       <input type="hidden" class="form-control" style="height:50px" name="Headmaster"    value="pending"
                        ></input>
                        
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="tHeadmaster"    value="pending"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="DEO" value="pending" 
                        ></input>
        <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
        <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ Auth::user()->regional}}"
                        placeholder="mbeya"></input>
        <input type="hidden" class="form-control" style="height:50px" name="Employee_id" value="{{Auth::user()->Employee_id}}"
                        placeholder="mwenge"></input>
               </div>
        <input type="hidden" class="form-control" style="height:50px" name="cdistrict"  value="{{ Auth::user()->district}}"
                        placeholder="mbeya"></input>
        <input type="hidden" class="form-control" style="height:50px" name="ward1"    value="{{Auth::user()->ward}}"
                        placeholder="ruanda"></input>
        <input type="hidden" class="form-control" style="height:50px" name="cschool1" value="{{ Auth::user()->schools }}"
                        placeholder="mwenge"></input>
                  
                        <div class="form-group">
                   
                   <input type="hidden" class="form-control" style="height:50px" name="tregional" value="{{ $letter->regional}}"
                       placeholder="mwenge"></input>
               </div>
               <div class="form-group">
                   
                   <input type="hidden" class="form-control" style="height:50px" name="tward" value="{{ $letter->ward}}"
                       placeholder="mwenge"></input>
               </div>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="schools" value="{{$letter->cschool}}"
                        placeholder="mwenge"></input>
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" style="height:50px" name="tdistrict" value="{{$letter->cdistrict}}"
                        placeholder="iringa"></input>
                </div>
            </div>
        @csrf
        @method('PUT')
    @else
    <form action="{{ route('letters.update', $letter->id) }}" method="POST">
    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                 Comment<input type="text" class="form-control" style="height:50px" name="T_comment" 
                        ></input>
                </div>
                <div class="form-group">
                <input type="hidden" class="form-control" style="height:50px" name="cdistrict"  value="{{ $letter->cdistrict}}"
                        placeholder="mbeya"></input>
                <input type="hidden" class="form-control" style="height:50px" name="Employee_id" value="{{ $letter->Employee_id}}"
                        placeholder="mwenge"></input>
                <input type="hidden" name="name" value="{{ $letter->name }}" class="form-control" placeholder="Name">
                <input type="hidden" name="author"  value="{{ $letter->author }}" class="form-control" placeholder="Name">
               
                  
                  <input type="hidden" class="form-control" style="height:50px"  name="Teacher_approved"  value="{{$letter->Teacher_approved}}"  
                      placeholder="description"></input>
              </div>
              <div class="form-group">
                   
                   <input type="hidden" class="form-control" style="height:50px" name="WEO"  value="{{$letter->WEO}}" 
                       ></input>
               </div>
               <input type="hidden" class="form-control" style="height:50px" name="Headmaster"    value="{{$letter->Headmaster}}"
                        ></input>
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="tHeadmaster"    value="{{$letter->Transfer_Headmaster}}"
                       ></input>
                       <input type="hidden" class="form-control" style="height:50px" name="DEO" value="pending" 
                        ></input>
        <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
      <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ $letter->regional}}"
                        placeholder="mbeya"></input>
        <input type="hidden" class="form-control" style="height:50px" name="ward1"    value="{{$letter->ward}}"
                        placeholder="ruanda"></input>
     <input type="hidden" class="form-control" style="height:50px" name="cschool1" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                        <input type="hidden" class="form-control" style="height:50px" name="tregional" value="{{ $letter->tregional}}"
                       placeholder="mwenge"></input>
               </div>
               <div class="form-group">
                   
                   <input type="hidden" class="form-control" style="height:50px" name="tward" value="{{ $letter->tward}}"
                       placeholder="mwenge"></input>
               </div>
                
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="schools" value="{{ $letter->tschool }}"
                        placeholder="mwenge"></input>
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" style="height:50px" name="tdistrict" value="{{ $letter->tdistrict}}"
                        placeholder="iringa"></input>
                </div>
            </div>
        
        @csrf
        @method('PUT')
    @endif


        <div class="row">
       
           
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
   
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="description"  value="{{$letter->description}}"
                        placeholder="description"></input>
                </div>
            </div>
           
        
            @if(!($letter->author==Auth::user()->name))
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     <label>Reason for Want to swap</label>
                    <input type="text" class="form-control" style="height:50px" name="description"  
                        placeholder="description"></input>
                </div>
            </div>
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
             <input type="text" class="form-control" style="height:50px" name="Message"    value="SEND A REQUEST TRANSFER FOR EXACHANGE"
                       ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
               
            </div>
         
            @endif
         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
           
            <div class="col-xs-12 col-sm-12 col-md-12">
              
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                   
                </div>
            </div>
            </div>
            
            @endrole
            @role('Headmaster')
            <h2>Headmster Respond Request to Teacher {{ $letter->name }} </h2>
            <form action="{{ route('letters.update', $letter->id) }}" method="POST">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                            <script>
       function showHideissues(){
    if (document.getElementById("Not_support BY HEADMASTER").checked){
      document.getElementById("issues").style.display = "block";
    }else{
      document.getElementById("issues").style.display = "none";
    }
  }
</div>
</script>
  <!-- <div class="question">

       <h5>Need to support or not support that transfer request</h5>
                 <div class="form-check col-sm-2">
                   <input class="form-check-input" type="radio"  name="Headmaster" id="support BY HEADMASTER" value="support BY HEADMASTER" onclick="showHideissues()">
                   <label class="form-check-label">support BY HEADMASTER</label>
                 </div>
                 <div class="form-check col-sm-2">
                   <input class="form-check-input" type="radio" name="Headmaster" id="Not_support BY HEADMASTER" value="Not_support BY HEADMASTER" onclick="showHideissues()">
                   <label class="form-check-label">Not_support BY HEADMASTER</label>
                 </div>
                 <div class="form-group" style="display:none;" id="issues">
                   <input  class="form-control" rows="4" name="H_comment"   placeholder="few school Teacher:" value="not a reason"></input>
         </div>
 </div> -->

 <div class="form-group"  id="issues">
                   <input  class="form-control" rows="4" name="H_comment"   placeholder="few school Teacher:" value="not a reason"></input>
         </div>
                                            
                     
                 </div>
           
        @csrf
        @method('PUT')
       
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="schools" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="T_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ $letter->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
        <input type="hidden" class="form-control" style="height:50px" name="Teacher_approved"    value="{{ $letter->Teacher_approved}}"
                       ></input>
        <input type="hidden" class="form-control" style="height:50px" name="tHeadmaster"    value="{{ $letter->Transfer_Headmaster}}"
                       ></input>
        <input type="hidden" class="form-control" style="height:50px" name="Headmaster"    value="{{ $letter->Headmaster}}"
                       ></input>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" name="author" value="{{ $letter->author }}" class="form-control" placeholder="Name">
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
             <input type="hidden" class="form-control" style="height:50px" name="Message"    value="SEND A REQUEST TRANSFER FOR EXACHANGE"
                       ></input>
                </div>
            </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $letter->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="cschool1" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="cdistrict" value="{{ $letter->cdistrict}}"
                        placeholder="iringa"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="tdistrict" value="{{ $letter->tdistrict}}"
                        placeholder="mbeya"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$letter->description}}"
                        placeholder="description"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="ward1"   value="{{$letter->ward}}"
                        placeholder="ruanda"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DEO" value="{{$letter->DEO}}" 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="{{$letter->DED}}" 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
          
            
            @endrole
            @role('Weo')
            <h2>Ward Education Officer Respond Request to Teacher {{ $letter->name }} </h2>
            <form action="{{ route('letters.update', $letter->id) }}" method="POST">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                            
                                            <input type="text" class="form-control" style="height:50px" name="W_comment" 
                                                    ></input>
                </div>
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="W_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
                </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="schools" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="cschool1" value="{{ Auth::user()->schools }}"
                        placeholder="mwenge"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" style="height:50px" name="tdistrict" value="{{ $letter->cdistrict}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="cdistrict"  value="{{ Auth::user()->district}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ Auth::user()->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="description"  value="{{$letter->description}}"
                        placeholder="description"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="ward1"    value="{{Auth::user()->ward}}"
                        placeholder="ruanda"></input>
                </div>
            </div>
        
            @if($letter->author==Auth::user()->name))
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     <label>Description</label>
                    <input type="text" class="form-control" style="height:50px" name="description"  
                        placeholder="description"></input>
                </div>
            </div>
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
             <input type="text" class="form-control" style="height:50px" name="Message"    value="SEND A REQUEST TRANSFER FOR EXACHANGE"
                       ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px"  name="Teacher_approved"  value="pending"  
                        placeholder="description"></input>
                </div>
            </div>
         
            @endif
         
            <div class="col-xs-12 col-sm-12 col-md-12">
               
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="tHeadmaster"    value="pending"
                       ></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="WEO"  value=" {{ $letter->WEO }} " 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ Auth::user()->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DEO" value=" {{ $letter->DEO }} " 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value=" {{ $letter->DED }} " 
                        ></input>
                </div>
            </div>
            
            @endrole

            @role('DED')
            <h2>District Director Respond Request to Teacher {{ $letter->name }} </h2>
            <form action="{{ route('letters.update', $letter->id) }}" method="POST">

        @csrf
        @method('PUT')
        <input type="text" class="form-control" style="height:50px" name="DED_comment" 
                                                    ></input>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $letter->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="DED_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="cschool" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                </div>
                <div class="form-group">
                 
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="cdistrict" value="{{ $letter->cdistrict}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="tdistrict" value="{{ $letter->tdistrict}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$letter->description}}"
                        placeholder="description"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="ward"   value="{{$letter->ward}}"
                        placeholder="ruanda"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="{{$letter->DED}}" 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="ward1"    value="{{Auth::user()->ward}}"
                        placeholder="ruanda"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="cschool1" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ Auth::user()->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="schools" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                </div>
            </div>
            
            @endrole
            @role('DEO')
            <h2>District Education Officer Respond Request to Teacher {{ $letter->name }} </h2>
     <form action="{{ route('letters.update', $letter->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" class="form-control" style="height:50px" name="DEO_comment" 
                                                    ></input>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $letter->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="DEO_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="cschool" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                </div>
                <div class="form-group">
                 
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="cdistrict" value="{{ $letter->cdistrict}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="tdistrict" value="{{ $letter->tdistrict}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$letter->description}}"
                        placeholder="description"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="ward"   value="{{$letter->ward}}"
                        placeholder="ruanda"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="{{$letter->DED}}" 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="ward1"    value="{{Auth::user()->ward}}"
                        placeholder="ruanda"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="cschool1" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ Auth::user()->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="schools" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                </div>
            </div>
            
            @endrole
            @role('Regional_Director')
            <h2>Regional Director Respond Request to Teacher {{ $letter->name }} </h2>
            <form action="{{ route('letters.update', $letter->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" class="form-control" style="height:50px" name="RD_comment" 
                                                    ></input>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $letter->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="RD_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="cschool" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                </div>
                <div class="form-group">
                 
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="cdistrict" value="{{ $letter->cdistrict}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="tdistrict" value="{{ $letter->tdistrict}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$letter->description}}"
                        placeholder="description"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="ward"   value="{{$letter->ward}}"
                        placeholder="ruanda"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="{{$letter->DED}}" 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="ward1"    value="{{Auth::user()->ward}}"
                        placeholder="ruanda"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="cschool1" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ Auth::user()->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="schools" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                </div>
            </div>
            
            @endrole
            @role('Tamisemi_Director')
          
       
            
            @endrole
            
            @if($letter->author==Auth::user()->name)
            @if($letter->Teacher_approved=='support BY TEACHER' || $letter->Teacher_approved=='Not_support BY TEACHER' || $letter->Teacher_approved=='pending')
            @role('Teacher')

          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
             <input type="hidden" class="form-control" style="height:50px" name="Message"    value="SEND A REQUEST TRANSFER FOR EXACHANGE"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="status"    value="5"
                       ></input>
        <input type="hidden" class="form-control" style="height:50px" name="statusi"    value="m"
                       ></input>
       
                </div>
            </div>
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">TEACHER ACCEPTED
                <select name="Teacher_approved" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY TEACHER">ACCEPTED</option>
                        <option value="Not_support BY TEACHER">Not_accepted</option>
                </select>
                 </div>
                </div>
            </div>
            @endif
            @endif
         

            @endrole
           

           
           
            @role('Headmaster')
            @if($letter->Headmaster=='Not_support BY HEADMASTER'  || $letter->Headmaster=='support BY HEADMASTER' || $letter->Headmaster=='pending' || $letter->Transfer_Headmaster=='Not_support BY HEADMASTER' || $letter->Transfer_Headmaster=='pending' || $letter->Transfer_Headmaster=='support BY HEADMASTER')
            @if($letter->author=='unknown' && $letter->Transfer_Headmaster!='pending')
            <div class="col-xs-12 col-sm-12 col-md-12">
            <input type="hidden" class="form-control" style="height:50px" name="status"    value="0"
                       ></input>
                <div class="form-group">Headmaster Approved
                <select name="Headmaster" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY HEADMASTER">support</option>
                        <option value="Not_support BY HEADMASTER">Not_support</option>
                </select>
                </div>
            </div>  
          @else
            <div class="col-xs-12 col-sm-12 col-md-12">
            <input type="hidden" class="form-control" style="height:50px" name="status"    value="0"
                       ></input>
                <div class="form-group">Headmaster Approved
                <select name="Transfer_Headmaster" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY HEADMASTER">support</option>
                        <option value="Not_support BY HEADMASTER">Not_support</option>
                </select>
                </div>
            </div>
            @endif
            @endif
            @endrole
         
           
         
            @role('Weo')
            @if($letter->WEO=='Not_support BY WEO' || $letter->WEO=='pending') 
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
             <input type="hidden" class="form-control" style="height:50px" name="Message"    value="SEND A REQUEST TRANSFER FOR EXACHANGE"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="tHeadmaster"    value="pending"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="Headmaster"    value="{{$letter->Headmaster}}"
                       ></input>
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="status"    value="1"
                       ></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">WEO support
                <select name="WEO" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY WEO">support</option>
                        <option value="Not_support BY WEO">Not_support</option>
                </select>
                </div>
            </div>
            @endrole
            @endif
           
         
            @if($letter->DEO=='support BY District_Education_Officer'  || $letter->DEO=='Not_support BY District_Education_Officer' || $letter->DEO=='pending') 
            @role('DEO')
            <input type="hidden" class="form-control" style="height:50px" name="Message"    value="SEND A REQUEST TRANSFER FOR EXACHANGE"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="tHeadmaster"    value="{{$letter->Transfer_Headmaster}}"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="Headmaster"    value="{{$letter->Headmaster}}"
                       
            <input type="hidden" class="form-control" style="height:50px" name="WEO"    value="{{$letter->WEO}}"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="status"    value="2"
                       ></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">DEO support jvhkjvfkj
                <select name="DEO" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY District_Education_Officer">support</option>
                        <option value="Not_support BY District_Education_Officer">Not_support</option>
                </select>
                </div>
            </div>
            @endrole
          
            @endif
           
            @if($letter->DED=='Not_support BY District_Executive_Director' || $letter->DED=='pending') 
            @role('DED')
            <input type="hidden" class="form-control" style="height:50px" name="Message"    value="SEND A REQUEST TRANSFER FOR EXACHANGE"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="tHeadmaster"    value="{{$letter->Transfer_Headmaster}}"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="Headmaster"    value="{{$letter->Headmaster}}"
               ></input>        
            <input type="hidden" class="form-control" style="height:50px" name="WEO"    value="{{$letter->WEO}}"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="DEO"    value="{{$letter->DEO}}"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="status"    value="3"
                       ></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">DED support
                <select name="DED" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY District_Executive_Director">support</option>
                        <option value="Not_support BY District_Executive_Director">Not_support</option>
                </select>
                </div>
            </div>
            @endrole
          
            @endif
            @if($letter->Regional_Director=='Not_support BY RD' || $letter->Regional_Director=='pending') 
            @role('Regional_Director')
            <input type="hidden" class="form-control" style="height:50px" name="Message"    value="SEND A REQUEST TRANSFER FOR EXACHANGE"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="tHeadmaster"    value="{{$letter->Transfer_Headmaster}}"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="Headmaster"    value="{{$letter->Headmaster}}"
               ></input>        
            <input type="hidden" class="form-control" style="height:50px" name="WEO"    value="{{$letter->WEO}}"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="DEO"    value="{{$letter->DEO}}"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$letter->DED}}"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="status"    value="4"
                       ></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">Regional_Director support
                <select name="Regional_Director" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="support BY RD">support</option>
                        <option value="Not_support BY RD">Not_support</option>
                </select>
                </div>
            </div>
            @endrole
          
            @endif

           
           
           
           
           
           
            @role('Teacher')
            @if(!($letter->author==Auth::user()->name))
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</div>

          
            @else
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">accept / Not_accept</button>
            </div>
</div>

            @endif
            @endrole
            @role('Headmaster')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">support / Not_support</button>
            </div>
            @endrole
            @role('Weo')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">support / Not_support</button>
            </div>
            @endrole
            @role('DEO')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">support / Not_support</button>
            </div>
            @endrole
            @role('DED')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">support / Not_support</button>
            </div>
            @endrole
            @role('Regional_Director')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">support / Not_support</button>
            </div>
            @endrole
        </div>

    </form>
</div>
   

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
   <form action="{{ route('letters.update', $letter->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $letter->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="RD_date" value="{{ $date2 }}"
                        placeholder="mwenge"></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="cschool" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                </div>
                <div class="form-group">
                 
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="Hidden" class="form-control" style="height:50px" name="cdistrict" value="{{ $letter->cdistrict}}"
                        placeholder="iringa"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="tdistrict" value="{{ $letter->tdistrict}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" class="form-control" style="height:50px" name="description" value="{{$letter->description}}"
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
                  
                    <input type="hidden" class="form-control" style="height:50px" name="tward"    value="{$letter->ward}}"
                        placeholder="ruanda"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 
                    <input type="Hidden" class="form-control" style="height:50px" name="cschool1" value="{{ $letter->cschool }}"
                        placeholder="mwenge"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="regional"  value="{{ $letter->regional}}"
                        placeholder="mbeya"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                   
                </div>
            </div>
                <input type="hidden" class="form-control" style="height:50px" name="Message"    value="SEND A REQUEST TRANSFER FOR EXACHANGE"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="author"    value="{{$letter->author}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="tHeadmaster"    value="{{$letter->Transfer_Headmaster}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="Headmaster"    value="{{$letter->Headmaster}}"
               ></input>        
               <input type="hidden" class="form-control" style="height:50px" name="WEO"    value="{{$letter->WEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DEO"    value="{{$letter->DEO}}"
                       ></input>
               <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$letter->DED}}"
                       ></input>
              <input type="hidden" class="form-control" style="height:50px" name="DED"    value="{{$letter->Regional_Director}}"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="Employee_id"    value="{{$letter->Employee_id}}"
                       ></input>
                      
                       <input type="hidden" class="form-control" style="height:50px" name="tschool"    value="{{$letter->tschool}}"
                       ></input>
    <input type="hidden" class="form-control" style="height:50px" name="schools"    value="{{$letter->cschool}}"
                       ></input>
<input type="hidden" class="form-control" style="height:50px" name="tward"    value="{{$letter->tward}}"
                       ></input>
<input type="hidden" class="form-control" style="height:50px" name="ward"    value="{{$letter->ward}}"
                       ></input>
    <input type="hidden" class="form-control" style="height:50px" name="tdistrict"    value="{{$letter->tdistrict}}"
                       ></input>
<input type="hidden" class="form-control" style="height:50px" name="district"    value="{{$letter->cdistrict}}"
                       ></input>
<input type="hidden" class="form-control" style="height:50px" name="tregional"    value="{{$letter->tregional}}"
                       ></input>
<input type="hidden" class="form-control" style="height:50px" name="regional"    value="{{$letter->regional}}"
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
            <div class="col-md-4 gradient-custom text-center text-white" 
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; background-color:#5C5CFF;">
              
               
              <h2 style="color:white;">Name:{{$letter->name}}</h2>
             
              <h2 style="color:white;">Check_No:{{$letter->Employee_id}}</h2>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Transfer Request Details</h6>
                <hr class="mt-0 mb-4">
                <h6><b>Current_status</b></h6>
              
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>School</h6>
                    <p class="text-muted">{{$letter->cschool}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>ward</h6>
                    <p class="text-muted">{{$letter->ward}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District</h6>
                    <p class="text-muted">{{$letter->cdistrict}}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional</h6>
                    <p class="text-muted">{{$letter->regional}}</p>
                  </div>
                </div>
                <h6><b>Transfer Want</b></h6>
              
              <div class="row pt-1">
                <div class="col-6 mb-3">
                  <h6>District</h6>
                  <p class="text-muted">{{$letter->tdistrict}}</p>
                </div>
                
                <div class="col-6 mb-3">
                  <h6>School</h6>
                  <p class="text-muted">{{$letter->tschool}}</p>
                </div>
              
              </div>
                
                <h6><b>Support status</b></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Headmaster</h6>
                    @if( $letter->Headmaster == 'Not_support BY HEADMASTER')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->Headmaster  == 'support BY HEADMASTER')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Ward_officer</h6>
                    @if( $letter->WEO == 'Not_support BY WEO')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->WEO == 'support BY WEO')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                </div>
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>District_officer</h6>
                    @if( $letter->DEO == 'Not_support BY District_Education_Officer')
                
                    <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
               
               @elseif( $letter->DEO == 'support BY District_Education_Officer')
              
                 <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
              
                @else
               
                 <button type="submit" class="btn btn-success"><i>pending</i></button>
               
               
                @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>District_Director</h6>
                    @if( $letter->DED == 'Not_support BY District_Executive_Director')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->DED == 'support BY District_Executive_Director')
          
             <button type="submit" class="btn btn-primary" style="width: 87px; height:34px;" ><i style="width: 87px; height:34px; padding:0px 0px 0px 0px;">support</i></button>
          
            @else
           
             <button type="submit" class="btn btn-success"><i>pending</i></button>
           
           
            @endif
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Regional_Director</h6>
                    @if( $letter->Regional_Director== 'Not_support BY RD')
                
                <button type="submit" class="btn btn-danger"><i> Not_support</i></button>
           
           @elseif( $letter->Regional_Director == 'support BY RD')
          
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
