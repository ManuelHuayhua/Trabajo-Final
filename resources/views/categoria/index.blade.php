@extends('layouts.venta')
@section('contenido')

<a href="categorias/create" type="button" class="btn btn-outline-success m-3">Colocar Nueva Desctipcion</a> <br>

<h3>Tabla de libros</h3>
<table class="table">
    <table class="table table-dark table-striped">
    <tr>
        <th scope="col"> <h4>Libro</h4></th>
        <th scope="col"><h4>Descripcion</h4></th>
        <th scope="col"><h4>Estado</h4></th>
        <th scope="col"><h4>Acciones</h4></th>

    </tr>
    </thead>
    <tbody>
@foreach($categorias as $categoria)
    <tr>
        <th >{{$categoria->libro}}</th>
        <th >{{$categoria->descripcion}}</th>
        <td>{{$categoria->estado ? 'Libre':'ocupado'}}</td>
        <th >
            <a href="categorias/{{$categoria->_id}}/edit" type="button" class="btn btn-outline-danger">Editar</a>
            <a href="categorias/{{$categoria->_id}}/delete"type="button" class="btn btn-outline-warning">Eliminar</a></th>

    </tr>
@endforeach
    </tbody>
</table>
@endsection
