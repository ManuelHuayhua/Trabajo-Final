@extends('layouts2.libros')
@section('contenido2')
<body>
<div class="page-nav">
    <h1>Biblioteca virtual </h1>
    <button id="checkout" class="button-checkout" onclick="pay()">Pagar </button>
    <a href="/categorias" class="btn btn-light m-3" >Registrar libros</a>

</div>

<div class="page-content">
@foreach($categorias as $categoria)
    <div class="product-container">
        <h3>{{$categoria->libro}}</h3>
        <img src="{{$categoria->imagen}}"/>
        <h2>{{$categoria->precio}}$</h2>
        <button class="button-add "  onclick="add('{{$categoria->libro}}', {{$categoria->precio}})">Agregar</button>
    </div>
    @endforeach
</body>
<script>
    let products = [];
    let total = 0;

    function add(product, price) {
        console.log(product, price);
        products.push(product);
        total = total + price;
        document.getElementById("checkout").innerHTML = `Pagar $${total}`
    }

    function pay() {
        window.alert(products.join(", \n"));
    }

</script>

@endsection
