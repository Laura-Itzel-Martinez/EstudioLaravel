@extends('layout.plantilla')
@section('titulo' , 'Create')
@section('TituloPagina', 'Cursos')

@section('contenido')
    
   <h1 class="display-6">Esta Pagina podras crear cursos</h1>

  <form action="{{route('store')}}" method="POST">
    @csrf
      <label>
        Nombre:
        <br>
        <input type="text" name="nombre">
      </label>
      <br>
      <label>
        Apellido:
        <br>
        <input type="text" name="apellido">
      </label>
      <br>
      <label>
        Categoria:
        <br>
        <textarea name="categoria" id="" cols="30" rows="10"></textarea>
      </label>
      <br>

      <button type="submit">Enviar formulario</button>
  </form >

   
@endsection