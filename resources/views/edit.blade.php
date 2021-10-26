@extends('layout.plantilla')
@section('titulo' , 'Create')
@section('TituloPagina', 'Cursos')

@section('contenido')
    
   <h1 class="display-6">Esta Pagina podras editar cursos</h1>

  <form action="{{route('update', $curso)}}" method="POST">
    @csrf
    @method('put');
      <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{$curso->nombre}}">
      </label>
      <br>
      <label>
        Apellido:
        <br>
        <input type="text" name="apellido" value="{{$curso->apellido}}">
      </label>
      <br>
      <label>
        Categoria:
        <br>
        <textarea name="categoria" id="" cols="30" rows="10">{{$curso->categoria}}</textarea>
      </label>
      <br>

      <button type="submit">Actualizar formulario</button>
  </form >

   
@endsection