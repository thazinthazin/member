@extends('layout.master')

@section('title','Edit User')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well">
            <form method="post">
                <legend>Edit User</legend>

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="name" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="emai1" name="email" value="{{$user->email}}">
                </div>

                <div class="form-group">
                    <select class="form-control" name="role[]" multiple>
                        @foreach($roles as $role)
                            <option value="{{$role->name}}"
                            @if(in_array($role->name,$selectedRoles))
                                selected="selected"
                            @endif
                            >{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Edit User</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    @endsection