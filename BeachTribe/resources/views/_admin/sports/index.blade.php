@extends('layout.admin')

@section("content")
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Modalidades</h1>


	<div class="card shadow mb-4">
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
					<a class="btn btn-primary" href="{{ route('admin.sports.create') }}">
						<i class="fas fa-plus"></i> Adicionar Modalidade
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
								<th>Título</th>
								<th>Imagem</th>
								<th>Descrição</th>
								<th>Nível de Dificuldade</th>
							</tr>
						</thead>
						<tbody>
							@foreach($sports as $sport)
							<tr>
								<td>{{ $sport->title }}</td>
								<td><img src="{{ Storage::url('sports/' . $sport->image) }}" width="50" alt="Imagem da Modalidade"></td>
                                <td>{{ $sport->description }}</td>
								<td>{{ $sport->difficulty }}</td>
								<td nowrap>
									<a class="btn btn-xs btn-primary btn-p" href="{{ route('admin.sports.show', $sport) }}"><i class="fas fa-eye fa-xs"></i></a>
									<a class="btn btn-xs btn-warning btn-p" href="{{ route('admin.sports.edit', $sport) }}"><i class="fas fa-pen fa-xs"></i></a>
									<form method="POST" action="{{ route('admin.sports.destroy', $sport) }}" role="form" class="inline">
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
