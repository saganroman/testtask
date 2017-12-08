@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">List of users:</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12 ">
                                <table class="table table-striped " id="dataTable">
                                    <thead>
                                    <tr>
                                        <th class="col-md-2 ">#</th>
                                        <th class="col-md-3 ">User name</th>
                                        <th class="col-md-3 ">Email</th>
                                        @if ($isModerator)
                                            <th class="col-md-2 ">Owner id</th>
                                            <th class="col-md-1 ">Change</th>
                                            <th class="col-md-1 ">Delete</th>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            @if ($isModerator)
                                                <td>{{$user->friend_id}}</td>
                                                <td><a href="{{url('/editUser').'/'.$user->id}}"> <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                                <td><a href="{{url('/destroyUser').'/'.$user->id}}"> <i class="fa fa-trash-o" aria-hidden="true"></i></ahref></td>
                                            @endif

                                         </tr>
                                     @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
