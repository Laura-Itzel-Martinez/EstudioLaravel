@extends('layout.plantilla')
@section('titulo' , 'Curso ' . $curso->nombre)
@section('TituloPagina', 'Cursos')

@section('contenido')
    
   <h1 class="display-6">Bienvenido al curso {{$curso->nombre}}</h1>
   <a href="{{route('index')}}">Volver al curso</a>
   <br>
   <a href="{{route('edit', $curso)}}">Editar persona</a>
   <p><strong>Categoria: </strong> {{$curso->categoria}}</p>
   <p>{{$curso->apellido}}</p>
@endsection