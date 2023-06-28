@extends('layouts.master')

@section('title', 'Books')

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-5">
        <div class="card-header bg-secondary">
            <h4 class="text-light p-2">BOOKS
                <a href="{{ url('admin/books-borrowed') }}"class="btn btn-primary btn-sm float-end">Add Borrower</a>
            </h4>

        </div>
        <div class="item-container card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>        
            @endif

            <table id="styled-table" class="table table-bordered">
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
                            <a href="{{ url('admin/delete-books/' . $item->id) }}">
                            <button type="button" value="{{ $item->id }}" class="deleteBooks btn btn-danger">Delete</button>
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

@section('scripts')
<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() { 

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }
            });
           
        $(document).on('click', '.deleteBooks', function () {

            if(confirm('Are you sure you want to delete this borrower?'))
            {
                var thisClicked = $(this);
                var item_id = thisClicked.val();

                $.ajax({
                    type:"POST",
                   
                    data:{
                        'item_id' : item_id
                    },
                    success: function (res) {
                        if(res.status == 200){
                            thisClicked.closest('.item-container').remove();
                            alert(res.message);
                        }else{
                            alert(res.message);
                        }
                    }
                })
            }

        });
        $(document).ready(function () {
            $('#styled-table').DataTable();
        });
        
        
    });

    
</script>
@endsection