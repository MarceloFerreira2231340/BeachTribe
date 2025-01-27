@extends('layout.admin')

@section("content")
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Eventos</h1>


	<div class="card shadow mb-4">
		<!--
		<div class="card-header pt-4">
			<form method="GET" action="#" class="form-group form-inline" style="width: 100%">
				{{-- <div class="form-group col-3">
					<label for="inputName">Name</label>
					<input type="text" class="form-control mx-2" name="name" id="inputName"
					value="" />
				</div>
				<div class="form-group col-3">
					<label for="inputEmail">Email</label>
					<input type="email" class="form-control mx-2" name="email" id="inputEmail" placeholder="Email address"
					value="" />
				</div>
				<div class="form-group col-3">
					<label for="inputRole">Role</label>
					<select name="role" id="inputRole" class="form-control mx-2">
						<option value="">All</option>
						<option value="Admin">Admin</option>
						<option value="Normal">Normal</option>
					</select>
				</div> --}}

				<div class="form-group col-3">
					{{-- <button type="submit" class="btn btn-success">Procurar</button>
					&nbsp; --}}
					<a class="btn btn-primary" href="{{ route('admin.events.create') }}">
						<i class="fas fa-plus"></i> Adicionar Evento
					</a>
				</div>
			</form>
		</div>
		-->

		<div class="card-header pt-4">
			<form method="GET" action="{{ route('admin.events.index') }}" class="form-group form-inline" style="width: 100%">
				<div class="form-group" style="margin: 0 2% 0 2%;">
					<label for="inputType">Tipo de Evento</label>
						<select name="type" class="form-control mx-2" id="inputType">
							<option value="">-</option>
							<option value="Formações" {{ request('type') == 'Formações' ? 'selected' : '' }}>Formações</option>
							<option value="Festivais" {{ request('type') == 'Festivais' ? 'selected' : '' }}>Festivais</option>
						</select>
				</div>
				<div class="form-group" style="margin: 0 2% 0 2%;">
					<label for="inputTitle">Título</label>
					<input type="text" class="form-control mx-2" name="title" id="inputTitle" value="{{ request('title') }}" />
				</div>
				<div class="form-group" style="margin: 0 2% 0 2%;">
				<label for="selectState">Estado</label>
					<select name="state" class="form-control mx-2" id="selectState">
						<option value="">-</option>
						<option value="Ativado" {{ request('state') == 'Ativado' ? 'selected' : '' }}>Ativado</option>
						<option value="Desativado" {{ request('state') == 'Desativado' ? 'selected' : '' }}>Desativado</option>
					</select>
				</div>
				
				<div class="form-group" style="margin: 0 2% 0 2%;">
					<label for="inputDate">Data:</label>
					<input type="date" class="form-control" name="date" id="inputDate" value="{{ request('title') }}" />
				</div>

				<div class="form-group" style="margin: 0 2% 0 2%;">
				<button type="submit" class="btn btn-success">Procurar</button>
					&nbsp;
					<a class="btn btn-primary" href="{{ route('admin.events.create') }}">
						<i class="fas fa-plus"></i> Adicionar Eventos
					</a>
				</div>
			</form>
		</div>
		<div class="card-body p-5">
			<div class="row">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Tipo de Festival</th>
								<th>Titulo</th>
								<th>Imagem</th>
								<th>Local</th>
								<th>Estado</th>
								<th>Data do Evento</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach($events as $event)
							<tr>
								<td>{{ $event->type }}</td>
								<td>{{ $event->title }}</td>
                                <td><img src="{{ Storage::url('events/' . $event->image) }}" width="50" alt="Imagem do Evento"></td>
								<td>{{ $event->local }}</td>
								<td>{{ $event->state }}</td>
								<td>{{ $event->date }}</td>
								<td nowrap>
									<a class="btn btn-xs btn-primary btn-p" href="{{ route('admin.events.show', $event) }}"><i class="fas fa-eye fa-xs"></i></a>
									<a class="btn btn-xs btn-warning btn-p" href="{{ route('admin.events.edit', $event) }}"><i class="fas fa-pen fa-xs"></i></a>
									<form method="POST" action="{{ route('admin.events.destroy', $event) }}" role="form" class="inline">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section("moreScripts")
<script>

	$('#dataTable').dataTable( {
		destroy: true,
		"bFilter": false,
		"order": [[ 1, 'asc' ]],
		"columns": [
		{ "orderable": false },
		null,
		null,
		null,
		{ "orderable": false }
		]
	} );

</script>
@endsection
