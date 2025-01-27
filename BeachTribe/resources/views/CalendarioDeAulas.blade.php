@extends('layout.master')

@section('title', 'Calendário de Aulas')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Joao/stylesjb.css?=1.0') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
@endsection

@section('content')

    <div class="intro">
        <h1><b>Calendário de Aulas</b></h1>
        <h3>Aqui podes consultar as aulas e os horários disponíveis por mês</h3>
    </div>

    {{-- Feedback de sucesso ou erro --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="">
        @php
            $currentMonth = null;
        @endphp

        @foreach($classes as $class)
            {{-- Título do mês --}}
            @if($currentMonth != date('F, Y', strtotime($class->date)))
                @php
                    $currentMonth = date('F, Y', strtotime($class->date));
                @endphp
                <div class="tltmes">
                    <h2>{{ $currentMonth }}</h2>
                </div>
            @endif

            {{-- Card de aula --}}
            <div class="fix">
                <div class="shadow-sm cardaula" style="border-color: #595959;">
                    
                    <div class="areadate">
                        <h2>{{ date('D', strtotime($class->date)) }}</h2>
                        <h1>{{ date('d', strtotime($class->date)) }}</h1>
                    </div>

                    <div class="vr"></div>

                    <div class="horaloc">
                        <div class="hora">
                            <i class="bi bi-clock-fill"></i>
                            <p>{{ $class->bgtime }} - {{ $class->endtime }}</p>
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
                            <p>{{ number_format($class->price, 2, ',', '.') }}€</p>
                        </div>
                    </div>

                    {{-- Verificar inscrição --}}
                    <div class="final-botao">
                        @if(Auth::check())
                            @php
                                $isSubscribed = $userSubscriptions->contains('classes_id', $class->id);
                            @endphp

                            @if($isSubscribed)
                                <button class="btninscrever" style="background-color: #F4A460; color: #fff;" disabled>INSCRITO</button>
                            @else
                                <form action="{{ route('class_subscription.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="classes_id" value="{{ $class->id }}">
                                    <button type="submit" class="btninscrever">Inscrever</button>
                                </form>
                            @endif
                        @else
                            <button class="btninscrever" style="background-color: #A73D3D; color: #fff;" disabled>Inicie sessão para se inscrever</button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/login_animation.js') }}"></script>
    <script src="{{ asset('js/dropdown_animation.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
