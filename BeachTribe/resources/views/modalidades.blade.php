@extends('layout.master')
@section('title', 'Modalidades')

@section('styles')
<link rel="stylesheet" href="{{('css/Marcelo/style.css')}}">
    <link rel="stylesheet" href="{{('css/Carolina/normalize.css')}}">
    <link href='https://fonts.googleapis.com/css?family=IBM%20Plex%20Mono' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
@endsection

@section('scripts')
<script src="{{asset('js/login_animation.js')}}"></script>
<script src="{{asset('js/dropdown_animation.js')}}"></script>
<script src="{{asset('js/highlightform.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="beachTribeEvents">
    <img src="{{('img\Carolina\Modalidades\modalidadesbanner.jpg')}}" alt="HeroImage">
    <div class="sectionEvents">
        <div class="sectionEventsTitle">Modalidades</div>
        <div class="sectionEventsText">Aqui podes encontrar as diversas modalidades que oferecemos nas praias dos nossos clubes!<br>Desde surf até voleibol de praia, há sempre algo interessante para praticar.<br><br>Escolhe a tua modalidade favorita e junta-te a nós!</div>
    </div>

        <div class="sectionsEventsDisplay">

            @foreach($sports as $sport)
        <div class="sectionEventsCards">
            <img src="{{ asset('img/Carolina/Modalidades/' . $sport->image) }}" alt="Banner da Carta">
            <div class="sectionEventsCardsInfo">
                <div class="sectionEventsCardsTitle">{{ $sport->title }}</div>
                <div class="sectionEventsCardsDescricao">{{ $sport->description }}</div>
                <a href="#" class="sectionEventsCardsSaberMais">
                    <span>Saber Mais</span>
                </a>
            </div>
        </div>
            @endforeach

        </div>

    </div>
@endsection
