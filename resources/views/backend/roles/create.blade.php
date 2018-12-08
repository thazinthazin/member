@extends('layout.master')

@section('title','Create Role')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form method="post">
                <legend>Coder Register</legend>

                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach

                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif

                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>

                <button type="submit" class="btn btn-primary">Insert</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    @endsection