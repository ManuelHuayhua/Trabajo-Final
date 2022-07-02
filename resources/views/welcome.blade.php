<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca virtual</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
          </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                font-family: 'open sans';
            }
            .contenedor{
                padding: 60px 0;
                width: 80%;
                max-width: 10000px;
                margin: auto;
                overflow: hidden;
            }
            .titulo{
                color: #642a73;
                font-size: 30px;
                text-align: center;
                margin-bottom: 60px;
            }

            /* heder*/

            header{
                width: 100%;
                height: 600px;
                background: #12c2e9;
                /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, hsla(0, 90%, 64%, 0.616), hsla(280, 78%, 69%, 0.623), #12c2e9),url(https://blog.pearsonlatam.com/hs-fs/hubfs/Blog%20HED/Multimedia/Im%C3%A1genes%20de%20Blog/contenidos-de-biblioteca-virtual-para-elearning.jpg?width=800&name=contenidos-de-biblioteca-virtual-para-elearning.jpg);
                /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, hsla(0, 90%, 64%, 0.616), hsla(280, 78%, 69%, 0.384), #12c2e9),url(https://blog.pearsonlatam.com/hs-fs/hubfs/Blog%20HED/Multimedia/Im%C3%A1genes%20de%20Blog/contenidos-de-biblioteca-virtual-para-elearning.jpg?width=800&name=contenidos-de-biblioteca-virtual-para-elearning.jpg);
                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background-size: cover;
                background-attachment:fixed ;
                position: relative;
            }
            nav{
                text-align: right;
                padding: 30px 50px 0 0;
            }

            a {
                color: white;
                font-weight: 300;
                text-decoration: none;
                margin-right: 20px;
            }
            nav > a{
                color: white;
                font-weight: 300;
                text-decoration: none;
                margin-right: 20px;

            }
            nav > a:hover{
                text-decoration: underline;

            }

            .hola{
                position: absolute;
                bottom: 0;
                width: 100%;
            }
            header .texto1{
                display: flex;
                text-align: center;
                height: 430px;
                width: 100%;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            .texto1 h1{
                font-size: 50px;
                color: white;
            }
            .texto1 h2{
                font-size: 30px;
                font-weight: 300;
                color: white;
            }

            .contenedor-nosotros{
                display: flex;
                justify-content: space-evenly;
            }
            .primeraimg{
                width: 48%;
            }
            .contenedor-nosotros .contenido{
                width: 48%;


            }
            .contenido h3{
                margin-bottom: 15px;

            }
            .contenido h3 span{
                background: purple;
                color: white;
                border-radius: 50%;
                display: inline-block;
                text-align: center;
                width:30px;
                height: 30px;
                padding: 2px;
                box-shadow: 0 0 6px 0 rgba(0, 0, 0, .5);
            }
            .contenido p{
                padding: 0px 0px 30px 15px;

                text-align: justify;
            }




            /* responsive*/



            @media screen and (max-width:990px){
                header{
                    background-position: center;
                }

                .contenedor-nosotros{
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }
                .contenedor-nosotros .contenido{
                    width: 90%;
                }
                .primeraimg{
                    width: 90%;
                }
                .imagenes5{
                    width: 44%;
                }
                .cards{
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }
                .cards .card{
                    width: 90%;
                }
                .cards .card:first-child{
                    margin-bottom: 30px;
                }
                .servicio1{
                    justify-content: center;
                    flex-direction: column;

                }
                .servicioindi{
                    width: 100%;
                    text-align: center;
                }
                .servicioindi:nth-child(1), .servicioindi:nth-child(2){
                    margin-bottom: 25%;
                }
                .servicioindi img{
                    width: 90%;

                }




            }


        </style>
    </head>
    <body>
    <header>
      <nav>
        <div>
            @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </nav>
        <div class="texto1">
            <section>
                <h1>BIBLIOTECA VIRTUAL</h1>
                <h2> Bienvenido</h2>
            </section>
        </div>
        <div class="hola" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: white;"></path></svg></div>

    </header>
    <section class="nosotros">
        <div class="contenedor">
            <h2 class="titulo">Que encontraras </h2>
            <div class="contenedor-nosotros">
                <img src="https://media.istockphoto.com/vectors/ebooks-collection-vector-concept-metaphor-vector-id1272673620?k=20&m=1272673620&s=612x612&w=0&h=GR7ldsGEXkVaUoYeN7gccT00ZdrJTafluhmKdZhG2q4=" alt="" class="primeraimg">
                <div class="contenido">
                    <h3><span>1</span>Veneficio de leer libros </h3>
                    <p> Al concentrarte en el libro y la historia que lees, dejas de lado los problemas que tienes y te transportas a otro mundo. Estimula la actividad cerebral: Al leer nuestro cerebro piensa, ordena e interrelaciona conceptos. De esta manera ejercitas tu mente.  </p>
                    <h3><span>2</span>Podras ver el resumen de un libro </h3>
                    <p>Ya que estamos consientes de que el libro es capaz de transportar a una persona a otra época, estimula la
                        imaginación y la creatividad, mejora los procesos cognitivos como la concentración y la atención, mejora la
                        comprensión de relaciones entre las cosas y la formación de conceptos, genera un aumento de vocabulario en el lector.
                    </p>

                    <h3><span>2</span>Podras ver una reseña del libro</h3>
                    <p>Las reseñas son muy importantes porque, a través de ellas, no sólo nos enteramos del tema de una obra sino de la forma como ésta es recibida por la crítica. Es de vital importancia la revisión del texto en función de garantizar y facilitar su seguimiento y comprensión por parte del lector.
                    </p>


                </div>
            </div>
        </div>

    </section>
    </body>
</html>
