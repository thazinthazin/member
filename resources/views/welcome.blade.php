@extends('layout.master')

@section('title','Home')

@section('content')
    <style>
        .fullscreen{
            height: calc(100vh - 30vh);
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <div class="fullscreen">
        <h1>PHP with laravel 5.5</h1>
    </div>
@endsection