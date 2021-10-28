@extends('user')


@section('title', 'Login')

@section('content')
    
<div class="container">
<h1 class="mt-5 mb-5">Login</h1>
<form class="mt-5" method="POST" action="{{route('auth.ingresar')}}">
@csrf
        @error('message')
        <h6 class="alert alert-danger">{{$message}}</h6>
        @enderror
<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
  <a href="{{route('auth.register')}}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Registrarse</a>
</form>
</div>
@endsection