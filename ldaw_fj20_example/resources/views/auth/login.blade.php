@extends("layouts.main")

@section('pageTitle',"login")

@push('styles')
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
@endpush

@section("mainContent")

    {{-- NOTE: Mostrar errores de autenticación si los hay --}}
    @if ($errors->any())

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

    @endif

    <form class="" method="post" action="{{route("login")}}" >

        @csrf

        <div class="form-row justify-content-center">

            <div class="col-auto">

                <div class="form-group">

                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" />

                </div>

                <div class="form-group">

                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" />

                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Entrar</button>

                </div>

            </div>

        </div>


    </form>

@endsection
