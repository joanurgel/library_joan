@extends('layouts.master')

@section('title' , 'View Record')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-5">
        <div class="card-header bg-secondary">
            <h4 class="text-light p-2">View Records
                <a href="{{ url('admin/add-record') }}" class="btn btn-primary float-end">Add Record</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>        
        @endif
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Books Title</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <tbody>
                    @foreach ($record as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->books_category }}</td>
                        <td>{{ $item->books_title }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->status }}</td>

                        <td>
                        <a href="{{ url('admin/record/' . $item->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/delete-record/' . $item->id) }}" class="btn btn-danger">Delete</a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination">
                {{ $record->links() }}
            </div>
           

    
    </div>

</div>
@endsection

