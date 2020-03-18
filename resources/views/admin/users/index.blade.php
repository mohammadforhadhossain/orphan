@extends('layouts.admin')

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8">
                <table class="table table-striped table-bordered">
                      <caption>List of users</caption>
                      <thead>
                            <tr>
                                <th scope="col">User Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Is_Active</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                            </tr>
                      </thead>
                      <tbody>
                          @if($users)
                              @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->role->name}}</td>
                                        <td>{{$user->is_active == 1 ? 'Active' : 'Inactive'}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at->diffForHumans()}}</td>
                                        <td>{{$user->updated_at->diffForHumans()}}</td>
                                    </tr>
                              @endforeach
                          @endif
                      </tbody>
                </table>
            </div>
            <div class="col-sm-2">

            </div>
        </div>
    </div>

@endsection