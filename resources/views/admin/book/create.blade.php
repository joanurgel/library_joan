@extends('layouts.master')

@section('title', 'Books')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-5">
        <div class="card-header">
            <div class="text-center bg-secondary">
                <h2 class="text-light p-2">BOOKS</h2>
            </div>
            {{-- <h4>BOOKS
                
            </h4> --}}
              
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger"></div>
            @foreach ($errors->all() as $error )
            <div>{{ $error }}</div>
            @endforeach
            @endif


            <form action="{{ url('admin/books-borrowed') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <div class="label">Name</div>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <div class="label">image</div>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="mb-3">
                    <div class="label">Category</div>
                    <input type="text" name="category" class="form-control">
                </div>

                {{-- <div class="mb-3">
                    <div class="label">Books_borrowed</div>
                    <input type="string" name="borrowed" class="form-control">
                </div>

                <div class="mb-3">
                    <div class="label">Books_return</div>
                    <input type="string" name="return" class="form-control">
                </div> --}}

                

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Add Borrower</button>
                </div>

            </form>
        </div>
    </div>
</div>





  {{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

        <title>Data Table</title>

        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
    
        
        <script
        src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
        crossorigin="anonymous">
        </script>

        <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready( function() {
                $('.styled-table').DataTable();
            });
        </script>                             
                           
    </body> --}}


</html>
@endsection