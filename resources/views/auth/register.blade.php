@extends('user')


@section('title', 'Registro')

@section('content')
    
<div class="container">
<h1 class="mt-5 mb-5">Registro</h1>
<form class="mt-5" method="POST" action="{{route('auth.store')}}">
@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>
<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>
@endsection