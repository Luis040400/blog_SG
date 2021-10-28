@extends('app');

@section('content')
<div class="container d-flex justify-content-between mt-5 mb-5">
    <h2>Crea tus publicaciones</h2>
    <a href="{{route('post.crear')}}" class="btn btn-primary" role="button" aria-pressed="true">Crear Publicación</a>
</div>


@if (session('success'))
        <h6 class="alert alert-success text-center">{{session('success')}}</h6>
            
        @endif

        @error('Titulo')
        <h6 class="alert alert-danger">{{$message}}</h6>
        @enderror

<div class="d-block  text-center ml-5 mr-5">
@foreach ($post as $p)
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$p->Titulo}}</h1>
    <p class="lead">{{$p->Contenido}}</p>
  </div>
  <div class='d-flex flex-column align-items-end '>
  <div class="">
                   <div>
                       <a class="btn btn-primary" href="{{route('post.edit', ['id' => $p->id])}}">Editar</a>
                   </div>
  </div>
  <div class="">
                   <form action="{{route('post.delete',[$p->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
  </div>
  </div>
</div>
    @endforeach
</div>


@endsection
