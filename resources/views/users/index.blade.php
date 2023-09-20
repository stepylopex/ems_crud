@extends('layouts.main')

@section('content')

     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Users</h1>
                    </div>

    <!-- Other content here -->
<div>
@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message')}}
    </div>
@endif
</div>
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Accounts</h6>
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Add</a>

                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Email Address</th>
                            <th scope="col" style=" padding: 8px;">Manage</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user ->id }}</th>
                                <td>{{ $user ->name}}</td>
                                 <td>{{ $user->first_name}} </td>
                                 <td>{{ $user->last_name}} </td>
                                <td>{{ $user->email}} </td>
                                <td><a href="{{ route('users.edit', $user->id) }}"><i class="fas fa-edit"></i></a> <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash" style="font-size:10px;"></i>
                                </button></td>
                               

                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
