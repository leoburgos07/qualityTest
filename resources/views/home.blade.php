@extends('layouts.app')
@section('content')
<div class="container w-75 text-center mt-5">
    @if($user)
    
        <h1>Bienvenido <span class="text-info">{{$user->name}}</span>, tu estado es <span class="text-success">{{$user->status}}</span></h1> <br>
        <a class="btn btn-danger"  href="/">Volver</a>
    
    @else
    <h1>Este usuario no existe.</h1>
    <a class="btn btn-danger"  href="/">Volver</a>
    @endif
</div>
@endsection