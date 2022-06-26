@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Manage Request </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('districts.create') }}" title="Send a request"> <i class="fas fa-plus-circle"></i>
                    </a>
                    
            </div>
        </div>
    </div>
    <div class="pull-left">
    <form action="{{ route('districts.index') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search "><br>
                                <span class="fas fa-search"></span>
                            </button>
                        
                    <input type="text" class="form-control mr-2" name="term" placeholder="Search request" id="term">
                        <a href="{{ route('districts.index') }}" class=" mt-1">
                        <div class="mx-auto pull-right">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                           </div>
</div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
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
            <tr>
            
        
            @if(($district->DEO==Auth::user()->name ||  $district->DED==Auth::user()->name)&& $letter->cdistrict==$district->name)
                <td>{{ ++$i }}</td>
                <td>{{ $letter->name }}</td>
                <td>{{ $letter->cschool }}</td>
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
    

    {!! $districts->links() !!}

@endsection