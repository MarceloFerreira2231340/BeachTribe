
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação do Evento
        </div>
        <div class="card-body">
			<div><strong>Tipo de Evento:</strong> {{ $events->type }} </div>
			<div><strong>Titulo:</strong> {{ $events->title }} </div>
			<div><strong>Imagem:</strong><br><img src="{{ asset('img/Marcelo/eventosMarcelo/' . $events->image) }}" width="50" alt="Banner da Carta"></div>
			<div><strong>Local:</strong> {{ $events->local }} </div>
            <div><strong>Estado do Evento:</strong> {{ $events->state }} </div>
            <div><strong>Data do Evento:</strong> {{ $events->date }} </div>
		</div>
	</div>
</div>
@endsection
