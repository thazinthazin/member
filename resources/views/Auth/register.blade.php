@extends('layout.master')

@section('title','Register Page')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <form method="post">
                    <legend>Coder Register</legend>

                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="name" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="emai1" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="confirmpassword">ConfirmPassword</label>
                        <input type="password" class="form-control" id="confirmpassword" name="password_confirmation" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Register</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection