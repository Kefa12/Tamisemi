@extends('layouts.layout')

@section('content')

    <div class="row">
   
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>WRITE MESSAGE TO ANOTHER TEACHER</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('transfers.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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

    <form action="{{ route('transfers.update', $transfer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" name="name" value="{{ $transfer->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="cschool"
                        placeholder="mwenge" value="{{ $transfer->cschool }}"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" style="height:50px" name="cdistrict"
                        placeholder="iringa" value="{{ $transfer->cdistrict}}"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="tdistrict"
                        placeholder="mbeya" value="{{ $transfer->tdistrict}}"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="description"
                        placeholder="description" value="{{$transfer->description}}"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Message Sent To another Teacher:  <i>{{ $transfer->name }}</i></strong>
                    <input  class="form-control" style="height:50px" name="Message"
                        placeholder="Can transfer by exachange"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" style="height:50px" name="author"
                        placeholder="description" value="{{Auth::user()->name}}"></input>
                </div>
            </div>
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

@endsection
