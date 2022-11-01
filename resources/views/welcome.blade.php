
@extends('layouts.app')
@section('content')
    <body>
    <div class="container w-25 border mt-5 p-5 text-center bg-dark">
        <h1 class="text-white">VoiceMax</h1>

        <form action="{{route('login')}}" method="POST">
        {!! csrf_field() !!}
            <div class="form-group">
                <label for="username" class="text-white">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="password" class="text-white">Password</label>
                <input type="password" class="form-control" name="password" id="password" >
            </div>
            <button type="submit" class="btn btn-info">Login</button>
        </form>

    </div>
@endsection



