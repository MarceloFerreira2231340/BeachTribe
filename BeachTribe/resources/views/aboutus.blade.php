@extends('layout.master')
@section('title','aboutus')

@section('styles')
<link rel="stylesheet" href="{{asset('css/normalize.css?v=1.0')}}">
<link rel="stylesheet" href="{{asset('css/Samuel/sobrenos.css?v=1.0')}}">
<link rel="website icon" type="image/apng" href="img/DarkSolo.png">
<link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection

@section('scripts')
<script src="{{asset('js/login_animation.js')}}"></script>
<script src="{{asset('js/dropdown_animation.js')}}"></script>
<script src="{{asset('js/highlightform.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection

@section('content')
    <main class="about-container">
        <h1>Sobre Nós</h1>
        <div class="divider-small"></div>
        <h2>Bem-vindo à nossa página sobre nós</h2>

        <div class="about-content">
            <div class="hero-section">
                <img alt="" class="hero-image">
                <div class="hero-text">
                    <p>Na Beach Tribe, acreditamos que a praia é muito mais do que areia e mar — é um estilo de vida. 🌴</p>
                    <p>Somos apaixonados por criar experiências memoráveis para amantes do mar e da aventura.</p>
                    <p>Desde os melhores equipamentos aquáticos até os acessórios perfeitos para relaxar à beira-mar, estamos aqui para ajudar-le a aproveitar cada momento ao máximo.</p>
                    <p>Junta-te à nossa tribo e descobre como transformar os teus dias de praia em algo verdadeiramente especial. 🌊</p>
                </div>
            </div>

            <div class="divider-large"></div>

            <div class="team-section">
                <div class="team-member">
                    <div class="member-image">
                        <img src="path-to-joao-image.jpg" alt="João">
                    </div>
                    <h3>João</h3>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <img src="path-to-carolina-image.jpg" alt="Carolina">
                    </div>
                    <h3>Carolina</h3>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <img src="path-to-marcelo-image.jpg" alt="Marcelo">
                    </div>
                    <h3>Marcelo</h3>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <img src="path-to-dinis-image.jpg" alt="Dinis">
                    </div>
                    <h3>Dinis</h3>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <img src="path-to-samuel-image.jpg" alt="Samuel">
                    </div>
                    <h3>Samuel</h3>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('scripts')
<script src="{{asset('js/login_animation.js')}}"></script>
<script src="{{asset('js/dropdown_animation.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
