@extends('layouts.master')

@section('title' , 'Edit Record')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-5">
        


        <div class="card-header">
            <h4>Edit Records
                <a href="{{ url('admin/record') }}" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger"></div>
            @foreach ($errors->all() as $error )
            <div>{{ $error }}</div>
            @endforeach
            @endif

            <form action="{{ url('admin/update-record/' . $record->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

            

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
                <input type="text" name="books_category" value="{{ $record->books_category }}" class="form-control"/>               
            </div>
            <div class="mb-3">
                <label for="">Books_title</label>
                <input type="text" name="books_title" value="{{ $record->books_title }}" class="form-control"/>                
            </div>
            <div class="mb-3">
                <label for="">Author</label>
                <input type="text" name="author" value="{{ $record->author }}" class="form-control"/>                
            </div>
            <div class="mb-3">
                <label for="">Status</label>
                <input type="text" name="status" value="{{ $record->status }}" class="form-control"/>                
            </div>

            <div class="col-md-8">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary float-end">Update Record</button>
                </div>
            </div>
        </div>
    </form>
    </div>
    

</div>
@endsection
