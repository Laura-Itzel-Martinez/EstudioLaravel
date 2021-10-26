@extends('layout.plantilla')
@section('titulo' , 'Cursos')
@section('TituloPagina', 'Cursos')

@section('contenido')
    
   <h1 class="display-6">Pagina principal de cursos</h1>
   <a href="{{route('create')}}">Crear curso</a>
    <ul>
        @foreach ($curso as $cursos)
        <li>
        <a href="{{route('show', $cursos->id)}}">{{$cursos->nombre}}</a>
       </li>
            
        @endforeach
    </ul>

@endsection