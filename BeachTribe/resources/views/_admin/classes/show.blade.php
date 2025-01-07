@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detalhes da Aula</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $class_->title }}</h6>
        </div>
        <div class="card-body">
            <p><strong>Tipo:</strong> {{ $class_->type }}</p>
            <p><strong>Estado:</strong> {{ $class_->stateToStr() }}</p>
            <p><strong>Localização:</strong> {{ $class_->location }}</p>
            <p><strong>Data:</strong> {{ $class_->date }}</p>
            <p><strong>Hora de Início:</strong> {{ $class_->bgtime }}</p>
            <p><strong>Hora de Fim:</strong> {{ $class_->endtime }}</p>
            <p><strong>Duração:</strong> {{ $class_->duration }} horas</p>
            <p><strong>Preço:</strong> {{ number_format($class_->price, 2, ',', '.') }} €</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.classes.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
@endsection
