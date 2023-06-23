@extends('layouts.master')

@section('title', 'Books')

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-5">
        <div class="card-header">
            <h4>Books
                <a href="{{ url('admin/books-borrowed') }}"class="btn btn-primary btn-sm float-end">Add Borrower</a>
            </h4>

        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>        
            @endif

            <table id="#styled-table" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Borrowed</th>
                        <th>Returned</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $item )
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <img src="{{ asset('uploads/book/'. $item->image) }}" class="rounded-circle" width="65px" height="70px" alt="Img">


                        <td>{{ $item->category }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <a href="{{ url('admin/edit-books/' . $item->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/delete-books/' . $item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="pagination">
                {{ $books->links() }}
            </div>
            
            


        </div>
        
    </div>

</div>

@endsection