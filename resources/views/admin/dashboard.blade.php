@extends('layouts.master')

@section('content')

{{-- <div class="pull-left mt-3">
    <a class="btn btn-success"> Add User</a>
</div>
<br>
</div>

<div class="card-body responsive mt-5">
    <table id="user-table" class="table table-striped table-bordered table-sm table-hover" cellspacing="3px">
        <thead>
            <tr>
                <th>User Id</th>
                <th>Username</th>
                <th>Books Return</th>
                <th>Books Borrowed</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>
</div> --}}




<div class="container">
    <div class="row mt-5">
        <div class="col-lg-3 col-sm-6 ">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3> 13436 </h3>
                    <p> Total Books </p>
                </div>
                <div class="icon">
                    <i class="bi bi-book-fill" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 ">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3> 64415 </h3>
                    <p> Total Students </p>
                </div>
                <div class="icon">
                    <i class="bi bi-people-fill" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3> 5464 </h3>
                    <p> Borrowed Today </p>
                </div>
                <div class="icon">
                    <i class="bi bi-book-half" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3> 723 </h3>
                    <p> Returned Today </p>
                </div>
                <div class="icon">
                    <i class="bi bi-book-half"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

@endsection