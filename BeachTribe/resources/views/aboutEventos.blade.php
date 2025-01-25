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
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação do Evento
        </div>
        <div class="card-body">
			<div><strong>Tipo de Evento: </strong> {{ $event->type }} </div>
			<div><strong>Titulo:</strong> {{ $event->title }} </div>
            <div><strong>Imagem:</strong><br><img src="{{ Storage::url('events/' . $event->image) }}" width="250" alt="Banner da Carta"></div>
			<div><strong>Descrição:</strong> {{ $event->description }} </div>
            <div><strong>Local:</strong> {{ $event->local }} </div>
            <div><strong>Estado do Evento:</strong> {{ $event->state }} </div>
            <div><strong>Data do Evento:</strong> {{ $event->date }} </div>
		</div>
	</div>
</div>
@endsection
