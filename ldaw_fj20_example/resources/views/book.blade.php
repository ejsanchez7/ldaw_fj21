@extends("layouts.main")

@section('pageTitle', (empty($book) ? "Detalle de Libro" : $book["title"]) )

@push('styles')
    <link rel="stylesheet" href="{{ url('css/bookDetail.css') }}">
@endpush

@section("mainContent")

    @if(empty($book))

        <div class="alert alert-warning" role="alert">No se encontraron detalles del libro</div>

    @else

        <h2>{{ $book["title"] }}</h2>

        <div class="row mt-5 justify-content-center">

            <div class="col-auto book-image">
                <img src="{{ url('img/books/' . $book['isbn'] . ".jpg") }}" alt="book image" />
            </div>

            <div class="col-auto book-data">

                <div class="row">

                    <div class="col-12">

                        <ul class="list-group">
                          <li class="list-group-item"><strong>ISBN: </strong>{{ $book["isbn"] }}</li>
                          <li class="list-group-item"><strong>Autor(es): </strong>{{ implode(", ", $book["authors"]) }}</li>
                          <li class="list-group-item"><strong>Edición: </strong>{{ $book["edition"] }}</li>
                          <li class="list-group-item"><strong>Editorial: </strong>{{ $book["publisher"] }}</li>
                          <li class="list-group-item"><strong>Idioma: </strong>{{ $book["language"] }}</li>
                        </ul>

                    </div>

                    <div class="col-12 book-categories mt-5">

                        @foreach($book["categories"] as $category)

                            <span class="badge badge-primary p-2 ml-2">{{ $category }}</span>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

        <div class="row mt-4">

            <p class="col book-summary text-justify px-5">{{ $book["summary"] }}</p>

        </div>

    @endif

@endsection
