@extends('layouts.venta')
@section('contenido')
    <h3>Editar categoria</h3>
    <form action="/categorias/update/{{$categoria->_id}}" method="POST">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Libro</label>
            <input type="text" class="form-control"  name="libro" value="{{$categoria->libro}}">


        </div>
        <div class="mb-3">
            <label  class="form-label">Descripcion</label>
            <input type="text" class="form-control"  name="descripcion" value="{{$categoria->descripcion}}">

        </div>
        <div class="mb-3">
            <label  class="form-label">Precio</label>
            <input type="text" class="form-control"  name="precio" value="{{$categoria->precio}}">

        </div>
        <div class="mb-3">
            <label  class="form-label">Imagen</label>
            <input type="text" class="form-control"  name="imagen" value="{{$categoria->imagen}}">

        </div>


        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection
