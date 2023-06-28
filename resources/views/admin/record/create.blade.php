@extends('layouts.master')

@section('title' , 'Add Record')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-5">
        @if ($errors->any())
            <div class="alert alert-danger"></div>
            @foreach ($errors->all() as $error )
            <div>{{ $error }}</div>
            @endforeach
            @endif


        <div class="card-header bg-secondary">
            <h4 class="text-light p-2">Records
                <a href="{{ url('admin/add-record') }}" class="btn btn-primary float-end">Add Record</a>
            </h4>
        </div>
        <div class="card-body">

            <form action="{{ url('admin/add-record') }}" method="POST">
            @csrf

            {{-- <div class="mb-3">
                <label for="">Categoryy</label>
                <input type="text" categoryy="categoryy" class="form-control"/>   --}}
                {{-- <select name="category" class="form-control">
                    @foreach ($books as $bookitem)
                    <option value="{{ $bookitem->id }}">{{ $bookitem->name }}</option>
                    @endforeach                   
                </select> --}}
            {{-- </div> --}}
            <div class="mb-3">
                <label for="">Books_category</label>
                <input type="text" name="books_category" class="form-control"/>               
            </div>
            <div class="mb-3">
                <label for="">Books_title</label>
                <input type="text" name="books_title" class="form-control"/>                
            </div>
            <div class="mb-3">
                <label for="">Author</label>
                <input type="text" name="author" class="form-control"/>                
            </div>
            <div class="mb-3">
                <label for="">Status</label>
                <input type="text" name="status" class="form-control"/>                
            </div>

            <div class="col-md-8">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary float-end">Save Record</button>
                </div>
            </div>
        </div>
    </form>
    </div>
    

</div>
@endsection
