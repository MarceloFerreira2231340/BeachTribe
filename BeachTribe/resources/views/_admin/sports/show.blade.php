
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação da Modalidade
        </div>
        <div class="card-body">
			<div><strong>Nome da Modalidade:</strong> {{ $sport->title }} </div>
			<div><strong>Descrição</strong> {{ $sport->description }} </div>
            <div><strong>Imagem:</strong><br><img src="{{ Storage::url('sports/' . $sport->image) }}" width="250" alt="Imagem da Modalidade"></div>
			<div><strong>Dificuldade:</strong> {{ $sport->difficulty }} </div>
        
		</div>
	</div>
</div>
@endsection
