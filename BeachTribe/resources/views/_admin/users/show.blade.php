
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação do Utilizador
        </div>
        <div class="card-body">
			<div><strong>Nome:</strong> {{ $user->name }} </div>
			<div><strong>E-mail:</strong> {{ $user->email }} </div>
			<div><strong>Telemóvel:</strong> {{ $user->phone }} </div>
			<!--<div><strong>Data de Nascimento:</strong> {{ $user->email }} </div>-->
			<div><strong>Endereço:</strong> {{ $user->address }} </div>
			<div><strong>Tipo:</strong> {{ $user->roleToStr() }} </div>
		</div>
	</div>
</div>
@endsection