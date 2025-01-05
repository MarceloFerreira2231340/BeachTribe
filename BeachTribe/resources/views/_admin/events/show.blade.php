
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação do Evento
        </div>
        <div class="card-body">
			<div><strong>Tipo de Evento:</strong> {{ $event->type }} </div>
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
