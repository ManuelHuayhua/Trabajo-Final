<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <title>biblioteca</title>


</head>
<style>
    {
        margin: 0px;
        background-color: aliceblue;
        font-family: 'Nerko One', cursive;
    }

    button {
        font-size: 16px;
        text-align: center;
        border-radius: 8px;
        padding: 10px 20px;
    }

    .page-nav {
        background-color: #2196F3;
        border: 1px solid black;
        position: relative;
    }

    .page-nav h1 {
        margin: 20px;
    }

    .button-checkout {
        background-color: white;
        color: black;
        border: 2px solid #008CBA; /* Blue */
        transition-duration: 0.4s;
        position: absolute;
        right: 15px;
        bottom: 15px;
    }

    .button-checkout:hover {
        background-color: #008CBA; /* Blue */
        color: white;
    }

    .page-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

    .product-container {
        margin: 15px;
        padding: 2px 16px;
        position: relative;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
        background-color: white;
    }

    .product-container:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .product-container img {
        width: 300px;
    }

    .product-container h1 {
        margin-bottom: 10px;
        margin-left: 15px;
    }

    .button-add {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50; /* Green */
        transition-duration: 0.4s;
        position: absolute;
        right: 15px;
        bottom: 10px;
    }

    .button-add:hover {
        background-color: #4CAF50; /* Green */
        color: white;
    }

</style>
<body>

    @yield('contenido2')
</div>
</body>
</html>
