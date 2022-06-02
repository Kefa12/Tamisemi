
@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Send Request</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('letters.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
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
   
    @role('Teacher')

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
        @csrf
        @method('PUT')
    @else
    <form action="{{ route('letters.update', $letter->id) }}" method="POST">
    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                 Comment<input type="text" class="form-control" style="height:50px" name="T_comment" 
                        ></input>
                </div>
        @csrf
        @method('PUT')
    @endif


        <div class="row">
       
           
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
        
            @if(!($letter->author==Auth::user()->name))
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
                <div class="form-group">
                  
             <input type="hidden" class="form-control" style="height:50px" name="Headmaster"    value="pending"
                        ></input>
                </div>
            </div>
            <input type="hidden" class="form-control" style="height:50px" name="tHeadmaster"    value="pending"
                       ></input>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="WEO"  value="pending" 
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
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DEO" value="pending" 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
                </div>
            </div>
            
            @endrole
            @role('Headmaster')
            <form action="{{ route('letters.update', $letter->id) }}" method="POST">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                            <script>
       function showHideissues(){
    if (document.getElementById("REJECTED BY HEADMASTER").checked){
      document.getElementById("issues").style.display = "block";
    }else{
      document.getElementById("issues").style.display = "none";
    }
  }
</script>
  <!-- <div class="question">

       <h5>Need to support or not support that transfer request</h5>
                 <div class="form-check col-sm-2">
                   <input class="form-check-input" type="radio"  name="Headmaster" id="APPROVED BY HEADMASTER" value="APPROVED BY HEADMASTER" onclick="showHideissues()">
                   <label class="form-check-label">APPROVED BY HEADMASTER</label>
                 </div>
                 <div class="form-check col-sm-2">
                   <input class="form-check-input" type="radio" name="Headmaster" id="REJECTED BY HEADMASTER" value="REJECTED BY HEADMASTER" onclick="showHideissues()">
                   <label class="form-check-label">REJECTED BY HEADMASTER</label>
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
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DEO" value="pending" 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
          
            
            @endrole
            @role('Weo')
            <form action="{{ route('letters.update', $letter->id) }}" method="POST">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                            
                                            Comment<input type="text" class="form-control" style="height:50px" name="W_comment" 
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
                   
                    <input type="hidden" class="form-control" style="height:50px" name="WEO"  value="pending" 
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
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DEO" value="pending" 
                        ></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
                        ></input>
                </div>
            </div>
            
            @endrole

            @role('DED')
            <form action="{{ route('letters.update', $letter->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $letter->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
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
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
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
     <form action="{{ route('letters.update', $letter->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $letter->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
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
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
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
            <form action="{{ route('letters.update', $letter->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="Hidden" name="name" value="{{ $letter->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
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
                   
                    <input type="hidden" class="form-control" style="height:50px" name="DED" value="pending" 
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
            
            @if($letter->author==Auth::user()->name)
            @if($letter->Teacher_approved=='REJECTED BY TEACHER' || $letter->Teacher_approved=='pending')
            @role('Teacher')

          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
             <input type="hidden" class="form-control" style="height:50px" name="Message"    value="SEND A REQUEST TRANSFER FOR EXACHANGE"
                       ></input>
            <input type="hidden" class="form-control" style="height:50px" name="status"    value="5"
                       ></input>
       
                </div>
            </div>
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">TEACHER ACCEPTED
                <select name="Teacher_approved" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="APPROVED BY TEACHER">ACCEPTED</option>
                        <option value="REJECTED BY TEACHER">REJECTED</option>
                </select>
                </div>
            </div>
            @endif
            @endif
         

            @endrole
           

           
           
            @role('Headmaster')
            @if($letter->Headmaster=='REJECTED BY HEADMASTER'  || $letter->Headmaster=='APPROVED BY HEADMASTER' || $letter->Headmaster=='pending' || $letter->Transfer_Headmaster=='REJECTED BY HEADMASTER' || $letter->Transfer_Headmaster=='pending' || $letter->Transfer_Headmaster=='APPROVED BY HEADMASTER')
            @if($letter->author=='unknown' || $letter->Transfer_Headmaster!='pending')
            <div class="col-xs-12 col-sm-12 col-md-12">
            <input type="hidden" class="form-control" style="height:50px" name="status"    value="0"
                       ></input>
                <div class="form-group">Headmaster Approved
                <select name="Headmaster" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="APPROVED BY HEADMASTER">APPROVED</option>
                        <option value="REJECTED BY HEADMASTER">REJECTED</option>
                </select>
                </div>
            </div>  
          @else
            <div class="col-xs-12 col-sm-12 col-md-12">
            <input type="hidden" class="form-control" style="height:50px" name="status"    value="0"
                       ></input>
                <div class="form-group">Headmaster Approved
                <select name="Transfer_Headmaster" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="APPROVED BY HEADMASTER">APPROVED</option>
                        <option value="REJECTED BY HEADMASTER">REJECTED</option>
                </select>
                </div>
            </div>
            @endif
            @endif
            @endrole
         
           
         
            @role('Weo')
            @if($letter->WEO=='REJECTED BY WEO' || $letter->WEO=='pending') 
          
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
                <div class="form-group">WEO APPROVED
                <select name="WEO" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="APPROVED BY WEO">APPROVED</option>
                        <option value="REJECTED BY WEO">REJECTED</option>
                </select>
                </div>
            </div>
            @endrole
            @endif
           
         
            @if($letter->DEO=='REJECTED BY District_Education_Officer' || $letter->DEO=='pending') 
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
                <div class="form-group">DEO APPROVED jvhkjvfkj
                <select name="DEO" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="APPROVED BY District_Education_Officer">APPROVED</option>
                        <option value="REJECTED BY District_Education_Officer">REJECTED</option>
                </select>
                </div>
            </div>
            @endrole
          
            @endif
           
            @if($letter->DED=='REJECTED BY District_Executive_Director' || $letter->DED=='pending') 
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
                <div class="form-group">DED APPROVED
                <select name="DED" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="APPROVED BY District_Executive_Director">APPROVED</option>
                        <option value="REJECTED BY District_Executive_Director">REJECTED</option>
                </select>
                </div>
            </div>
            @endrole
          
            @endif
            @if($letter->Regional_Director=='REJECTED BY RD' || $letter->Regional_Director=='pending') 
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
                <div class="form-group">Regional_Director APPROVED
                <select name="Regional_Director" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="APPROVED BY RD">APPROVED</option>
                        <option value="REJECTED BY RD">REJECTED</option>
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
          
            @else
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">APPROVED / REJECTED</button>
            </div>
            @endif
            @endrole
            @role('Headmaster')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">APPROVED / REJECTED</button>
            </div>
            @endrole
            @role('Weo')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">APPROVED / REJECTED</button>
            </div>
            @endrole
            @role('DEO')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">APPROVED / REJECTED</button>
            </div>
            @endrole
            @role('DED')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">APPROVED / REJECTED</button>
            </div>
            @endrole
            @role('Regional_Director')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">APPROVED / REJECTED</button>
            </div>
            @endrole
        </div>

    </form>
@endsection