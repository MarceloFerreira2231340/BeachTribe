@extends('layout.master')
@section('title', 'Info - Eventos')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Marcelo/style.css?v=1.0') }}">
    <link rel="stylesheet" href="{{ asset('css/Marcelo/normalize.css?v=1.0') }}">
    <link href='https://fonts.googleapis.com/css?family=IBM%20Plex%20Mono' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection

@section('scripts')
    <script src="{{ asset('js/login_animation.js') }}"></script>
    <script src="{{ asset('js/dropdown_animation.js') }}"></script>
    <script src="{{ asset('js/highlightform.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endsection

@section('content')
    <div style="position: relative;">
        @if ($event->type == 'Festivais')
            <div>
                <img src="{{ Storage::url('events/FestivalBanner.png') }}" alt="Festival Banner" style="width: 100vw;">
            </div>
        @elseif($event->type == 'Formações')
            <div>
                <img src="{{ Storage::url('events/FormacaoBanner.png') }}" alt="Formação Banner" style="width: 100vw;">
            </div>
        @endif
        <a href="{{ route('eventos') }}" class="btn btn-primary" style="position: absolute; top: 25px; left: 25px;"> &#8592;
            Voltar</a>
    </div>

    <div class="aboutEventos">
        <div class="aboutEventosTitle mt-4">
            <h1>{{ $event->title }}</h1>
        </div>
        <div class="aboutEventosLocal">
            <h5>📍{{ $event->local }}</h5>
        </div>
        <div class="aboutEventosImg">
            <img src="{{ Storage::url('events/' . $event->image) }}" height="300" alt="Banner da Carta">
        </div>
        <div class="aboutEventosDescription">
            <span>{{ $event->description }}</span>
        </div>
    </div>




    {{-- <div class="container-fluid">
        <div class="card shadow mb-4 mt-2">
            <div class="card-header py-3">
                <strong>{{ $event->title }}</strong>
            </div>
            <div class="card-body">
                <div><img src="{{ Storage::url('events/' . $event->image) }}" width="500"
                        alt="Banner da Carta"></div>
                <div><strong>Descrição:</strong> {{ $event->description }} </div>
                <div><strong>Local:</strong> {{ $event->local }} </div>
                <div><strong>Estado do Evento:</strong> {{ $event->state }} </div>
                <div><strong>Data do Evento:</strong> {{ $event->date }} </div>
            </div>
        </div>
    </div> --}}
@endsection
