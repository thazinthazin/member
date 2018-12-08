@extends('layout.master')

@section('title','User Login')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form method="post">
                <legend>Coder Login</legend>

                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="emai1" name="email" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection