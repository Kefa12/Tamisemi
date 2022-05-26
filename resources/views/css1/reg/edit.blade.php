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
    <form action="{{ route('letters.update', $letter->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $letter->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Current_working_school:</strong>
                    <textarea class="form-control" style="height:50px" name="cschool"
                        placeholder="mwenge">{{ $letter->cschool }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Current_working_district:</strong>
                    <textarea class="form-control" style="height:50px" name="cdistrict"
                        placeholder="iringa">{{ $letter->cdistrict}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>District_wanted_to_Transfer:</strong>
                    <textarea class="form-control" style="height:50px" name="tdistrict"
                        placeholder="mbeya">{{ $letter->tdistrict}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Reason for Transfer:</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description">{{$letter->description}}</textarea>
                </div>
            </div>
            @endrole
            @if($letter->Headmaster=='REJECTED BY HEADMASTER' || $letter->Headmaster=='pending')
            @role('Headmaster')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">Headmaster Approved
                <select name="Headmaster" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="APPROVED BY HEADMASTER">APPROVED</option>
                        <option value="REJECTED BY HEADMASTER">REJECTED</option>
                </select>
                </div>
            </div>
            @endif
            @endrole
            @if($letter->Headmaster=='APPROVED BY HEADMASTER') 
            @if($letter->WEO=='REJECTED BY WEO') 
            @role('Weo')
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
            @endif
            @if($letter->WEO=='APPROVED BY WEO') 
            @if($letter->DEO=='REJECTED BY District_Education_Officer') 
            @role('DEO')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">DEO APPROVED
                <select name="DEO" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="APPROVED BY District_Education_Officer">APPROVED</option>
                        <option value="REJECTED BY District_Education_Officer">REJECTED</option>
                </select>
                </div>
            </div>
            @endrole
            @endif
            @endif
            @if($letter->DEO=='APPROVED BY District_Education_Officer') 
            @if($letter->DED=='REJECTED BY District_Executive_Director' || $letter->DED=='pending') 
            @role('DED')
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
            @endif
           
           
           
            @role('Teacher')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
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
        </div>

    </form>
@endsection