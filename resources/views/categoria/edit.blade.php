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


        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection
