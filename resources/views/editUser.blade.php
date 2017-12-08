@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="{{url('/updateUser')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label for="name">Change name:</label>
                                <input type="text" value="{{$user->name}}" class="form-control" name="name" id="name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label for="email">Change email:</label>
                                <input type="text" value="{{$user->email}}" name="email" class="form-control" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class='col-md-12'>

                            <button class=" btn btn-primary pull-right" type="submit">Update</button>
                        </div>
                    </div>
                </form>
                <br><br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
