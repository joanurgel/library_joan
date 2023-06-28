@extends('layouts.master')

@section('title', 'View Users')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-5">
            <div class="card-header">
                <h4>View Users</h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Avatar</th> <!-- New column for displaying avatars -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role_as == '1' ? 'Admin' : 'User' }}</td>
                                <td><img src="" alt="Avatar" class="img-fluid rounded-circle avatar-img"></td> <!-- Placeholder for avatar -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();

            // Fetch avatar data from API and update avatar URLs
            $.ajax({
                url: 'https://reqres.in/api/users?fbclid=IwAR15kI7gviKtosy-LflJhO8rG8KOmX5B9Mc5otiRBg_TeqVpeqJDZA5DSug',
                method: 'GET',
                success: function(response) {
                    const users = response.data;
                    const avatarElements = document.querySelectorAll('.avatar-img');

                    users.forEach((user, index) => {
                        avatarElements[index].src = user.avatar;
                    });
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    </script>
@endsection
