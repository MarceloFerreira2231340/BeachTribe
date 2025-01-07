@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação da Aula
        </div>
        <div class="card-body">
            <div><strong>Tipo:</strong> {{ ucfirst($class_->type) }}</div>
            <div><strong>Estado:</strong> {{ $class_->stateToStr() }}</div>
            <div><strong>Localização:</strong> {{ $class_->location }}</div>
            <div><strong>Data:</strong> {{ \Carbon\Carbon::parse($class_->date)->format('d/m/Y') }}</div>
            <div><strong>Hora de Início:</strong> {{ $class_->bgtime }}</div>
            <div><strong>Hora de Fim:</strong> {{ $class_->endtime }}</div>
            <div><strong>Duração:</strong> {{ $class_->duration }} horas</div>
            <div><strong>Preço:</strong> {{ number_format($class_->price, 2, ',', '.') }} €</div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.classes.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
@endsection