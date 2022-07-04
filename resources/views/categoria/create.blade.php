@extends('layouts.venta')
@section('contenido')
    <h3>Creacion</h3>
    <form action="/categorias/insert" method="POST">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Libro</label>
            <input type="text" class="form-control"  name="libro">
        </div>
        <div class="mb-3">
            <label  class="form-label">Descripcion</label>
            <input type="text" class="form-control"  name="descripcion">
           </div>
        <div class="mb-3">
            <label  class="form-label">Precio</label>
            <input type="text" class="form-control"  name="precio">
        </div>
        <div class="mb-3">
            <label  class="form-label">Imagen</label>
            <input type="text" class="form-control"  name="imagen">
        </div>


        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection
