<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <meta charset="utf-8">
        <title>Catálogo de Libros</title>

        <!--
        ***********************************
                        CSS
        ***********************************
        -->

        <!-- Bootstrap --->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo url('css/main.css'); ?>" />

    </head>

    <body>

        <header class="container-fluid">
            <h1>Mini Aplicación para Biblioteca</h1>
        </header>

        <nav class="container-fluid navbar navbar-expand-md navbar-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand d-md-none" href="#">Menu</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuevo Libro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuevo Préstamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mis Préstamos</a>
                    </li>
                </ul>

            </div>

        </nav>

        <main class="container-fluid">

            <h2>Catálogo de Libros</h2>

            <section class="catalog card-deck justify-content-center">

                <div class="card">

                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgmAa3s6pGdMB9LtGvVjKpTMDaInybN6FeKw&usqp=CAU" alt="Book Image">

                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">Autor</p>
                        <a href="#" class="btn btn-primary">Detalle</a>
                    </div>

                </div>

                <div class="card">

                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgmAa3s6pGdMB9LtGvVjKpTMDaInybN6FeKw&usqp=CAU" alt="Book Image">

                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">Autor</p>
                        <a href="#" class="btn btn-primary">Detalle</a>
                    </div>

                </div>

                <div class="card">

                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgmAa3s6pGdMB9LtGvVjKpTMDaInybN6FeKw&usqp=CAU" alt="Book Image">

                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">Autor</p>
                        <a href="#" class="btn btn-primary">Detalle</a>
                    </div>

                </div>

                <div class="card">

                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgmAa3s6pGdMB9LtGvVjKpTMDaInybN6FeKw&usqp=CAU" alt="Book Image">

                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">Autor</p>
                        <a href="#" class="btn btn-primary">Detalle</a>
                    </div>

                </div>

                <div class="card">

                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgmAa3s6pGdMB9LtGvVjKpTMDaInybN6FeKw&usqp=CAU" alt="Book Image">

                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">Autor</p>
                        <a href="#" class="btn btn-primary">Detalle</a>
                    </div>

                </div>

                <div class="card">

                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgmAa3s6pGdMB9LtGvVjKpTMDaInybN6FeKw&usqp=CAU" alt="Book Image">

                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">Autor</p>
                        <a href="#" class="btn btn-primary">Detalle</a>
                    </div>

                </div>

            </section>

        </main>

        <footer class="container-fluid">

            <p>Erik Sánchez - LDAW Febrero - Junio 2021</p>

        </footer>

        <!--
        ******************************************
                    JAVASCRIPT
        ******************************************
        -->

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    </body>
</html>
