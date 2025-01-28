@extends('layout.master')
@section('title', 'Modalidades')

@section('styles')
<link rel="stylesheet" href="{{('css/Carolina/style.css')}}">
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
<div class="modalidades">
    <div class="sectionsModDisplay">

        <div class="mods">
            <img src="{{ '\img\Carolina\Modalidades\modalidadesbanner.jpg' }}" alt="HeroImage" class="imgbanner">
            <div class="sectionMods">
                <div class="sectionModsTitle">Modalidades</div>
                <div class="sectionModsText">
                    <span>Descubra as nossas modalidades desportivas! Oferecemos uma ampla variedade de desportos para todas as idades e níveis de 
                    experiência. <p>Explore atividades que promovem saúde, diversão e espírito de equipa. Seja para se desafiar ou apenas se divertir, temos a modalidade ideal 
                    para si!</span>
                </div>
        </div>
        <div class="ModsCards">
        @foreach ($sports as $sport)
            @if ($sport->state !== 'desativado')
                <div class="sectionModCards">
                    <img src="{{ Storage::url('sports/' . $sport->image) }}" alt="imgs" class="sectionModCardsImage">
                    
                    <div class="sectionModCardsInfo">
                        <div class="sectionModCardsTitle">
                            {{ $sport->type }} <br>{{ $sport->title }}
                        </div>
                        
                        <div class="sectionModCardsDescricao">
                            {{ \Illuminate\Support\Str::limit($sport->description, 100, '...') }}
                        </div>
                        
                        <a href="" class="sectionModCardsSaberMais">
                            <span>Saber Mais</span>
                        </a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    </div>

</div>
@endsection
