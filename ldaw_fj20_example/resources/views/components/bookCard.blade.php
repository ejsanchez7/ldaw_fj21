@props(["isbn","title","authors"])

<div class="card">

    <img class="card-img-top" src="{{ url('img/books/' . $isbn . '.jpg') }}" alt="Book Image">

    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ implode(", ",$authors) }}</p>
        <a href="{{ url("book/$isbn") }}" class="btn btn-primary">Detalle</a>
    </div>

</div>
