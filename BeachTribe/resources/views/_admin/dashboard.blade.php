@extends('layout.admin')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-4">
			<div class="card shadow">
				<div class="card-header p-4">
					<h1 style="display:inline;"> {{ $count_users }} </h1>
					<h3 style="display:inline;"> Utilizadores </h3>
				</div>
				<a class="btn btn-primary" href="{{ route('admin.users.create') }}"><i class="fas fa-plus"></i> Adicionar Utilizador</a>
			</div>
		</div>
		<div class="col-4">
			<div class="card shadow">
				<div class="card-header p-4">
					<h1 style="display:inline;"> {{ $count_classes }} </h1>
					<h3 style="display:inline;"> Aulas </h3>
				</div>

			</div>
		</div>
		<div class="col-4">
			<div class="card shadow">
				<div class="card-header p-4">
					<h1 style="display:inline;"> {{ $count_sports }} </h1>
					<h3 style="display:inline;"> Atividades </h3>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card shadow">
				<div class="card-header p-4">
					<h1 style="display:inline;"> {{ $count_events }} </h1>
					<h3 style="display:inline;"> Eventos </h3>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card shadow">
				<div class="card-header p-4">
					<h1 style="display:inline;"> {{ $count_contacts }} </h1>
					<h3 style="display:inline;"> Contactos </h3>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection