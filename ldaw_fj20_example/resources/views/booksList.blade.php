@extends('layouts.main')

@section('pageTitle',"Catálogo de Libros")

@section('mainContent')

    <h2>Catálogo de Libros</h2>

    <section class="catalog card-deck justify-content-center">

        @foreach($booksList as $id => $book)

            <div class="card">

                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgmAa3s6pGdMB9LtGvVjKpTMDaInybN6FeKw&usqp=CAU" alt="Book Image">

                <div class="card-body">
                    <h5 class="card-title">{{ $book["title"] }}</h5>
                    <p class="card-text">{{ implode(", ",$book["authors"]) }}</p>
                    <a href="{{ url("book/$id") }}" class="btn btn-primary">Detalle</a>
                </div>

            </div>

        @endforeach

    </section>

@endsection
