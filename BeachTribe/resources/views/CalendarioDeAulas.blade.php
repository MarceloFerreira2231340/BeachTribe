@extends('layout.master')

@section('title', 'Calendário de Aulas')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/Joao/stylesjb.css?=1.0')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
@endsection

@section('content')
    <div class="intro">
        <h1><b>Calendário de Aulas</b></h1>
        <h3>Aqui podes consultar as aulas e os horários disponíveis durante o mês</h3>
    </div>
    
    @foreach($classes as $class)
        <div class="fix">
            <div class="tltmes">
                <h2>{{ \Carbon\Carbon::parse($class->created_at)->format('F, Y') }}</h2>
            </div>

            <div class="border rounded shadow-sm cardaula">

                <div class="areadate">
                    <h2>{{ \Carbon\Carbon::parse($class->created_at)->format('D') }}</h2>
                    <h1>{{ \Carbon\Carbon::parse($class->created_at)->format('d') }}</h1>
                </div>

                <div class="vr"></div>

                <div class="horaloc">
                    <div class="hora">
                        <i class="bi bi-clock-fill"></i>
                        <p>{{ \Carbon\Carbon::parse($class->created_at)->format('H:i') }} - {{ \Carbon\Carbon::parse($class->created_at)->addHours($class->duration)->format('H:i') }}</p>
                    </div>
                    <div class="loc">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p>{{ $class->location }}</p>
                    </div>
                </div>

                <div class="tipoprice">
                    <div class="tipo">
                        <i class="bi bi-info-circle-fill"></i>
                        <p>{{ $class->title }}</p>
                    </div>
                    <div class="price">
                        <i class="bi bi-wallet-fill"></i>
                        <p>{{ $class->price ?? 'N/A' }}€</p>
                    </div>
                </div>

                <div class="final-botao">
                    <a class="btninscrever" href="#" role="button">Inscrever</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('scripts')
    <script src="{{asset('js/login_animation.js')}}"></script>
    <script src="{{asset('js/dropdown_animation.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
