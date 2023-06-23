@extends('layouts.master')

@section('title' , 'Setting')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-5">
        <div class="card-header">
            <h4>View Records
                <a href="{{ url('admin/setting') }}" class="btn btn-primary float-end">Add Record</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>        
        @endif
        
        

            <div class="pagination">
                {{ $record->links() }}
            </div>
           

    
    </div>

</div>
@endsection

