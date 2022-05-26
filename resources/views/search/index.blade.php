@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Manage Request </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('transfers.create') }}" title="Send a request"> <i class="fas fa-plus-circle"></i>
                    </a>
                    
            </div>
        </div>
    </div>
    <div class="pull-left">
    <form action="{{ route('transfers.index') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search users"><br>
                                <span class="fas fa-search"></span>
                            </button>
                        
                    <input type="text" class="form-control mr-2" name="term" placeholder="Search users" id="term">
                        <a href="{{ route('transfers.index') }}" class=" mt-1">
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
        @foreach ($transfers as $transfer)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $transfer->name }}</td>
                <td>{{ $transfer->cschool }}</td>
                <td>{{ $transfer->cdistrict }}</td>
                <td>{{ $transfer->tdistrict }}</td>
                <td>{{ $transfer->description }}</td>
                
                <td>
                    <form action="{{ route('transfers.destroy', $transfer->id) }}" method="POST">

                        <a href="{{ route('transfers.show', $transfer->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('transfers.edit', $transfer->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')
                        @role('admin')
                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                        @endrole
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $transfers->links() !!}

@endsection