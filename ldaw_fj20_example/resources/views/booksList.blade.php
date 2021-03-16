@extends('layouts.main')

@section('pageTitle',"Catálogo de Libros")

{{-- Agregar una hoja de estilos específica de la vista --}}
@push('styles')
    <link rel="stylesheet" href="{{ url("css/catalog.css") }}">
@endpush

@section('mainContent')

    <h2>Catálogo de Libros</h2>

    <section class="catalog card-deck justify-content-center">

        @foreach($booksList as $id => $book)

            <x-bookCard :isbn="$id" :title="$book['title']" :authors="$book['authors']" />

        @endforeach

    </section>

@endsection

@push('scripts')
    
    {{--
    <script>
        alert("catalog");
    </script>
    --}}

@endpush
