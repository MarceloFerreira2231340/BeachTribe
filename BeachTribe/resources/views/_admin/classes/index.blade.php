@extends('layout.admin')

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Aulas</h1>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <form method="GET" action="{{ route('admin.classes.index') }}" class="form-group form-inline" style="width: 100%;">

                <!-- Botão de Adicionar -->
                <div class="form-group col-3">
                    <a class="btn btn-primary" href="{{ route('admin.classes.create') }}">
                        <i class="fas fa-plus"></i> Adicionar Aula
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
                                <th>Tipo</th>
                                <th>Estado</th>
                                <th>Localização</th>
                                <th>Data</th>
                                <th>Hora de Início</th>
                                <th>Hora de Fim</th>
                                <th>Duração (h)</th>
                                <th>Preço (€)</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($classes as $class_)
                                <tr>
                                    <td>{{ $class_->title }}</td>
                                    <td>{{ ucfirst($class_->type) }}</td>
                                    <td>{{ $class_->stateToStr() }}</td>
                                    <td>{{ $class_->location }}</td>
                                    <td>{{ \Carbon\Carbon::parse($class_->date)->format('d/m/Y') }}</td>
                                    <td>{{ $class_->bgtime }}</td>
                                    <td>{{ $class_->endtime }}</td>
                                    <td>{{ $class_->duration }}</td>
                                    <td>{{ number_format($class_->price, 2, ',', '.') }}€</td>
                                    <td nowrap>
                                        <a class="btn btn-xs btn-primary btn-p" href="{{ route('admin.classes.show', $class_) }}"><i class="fas fa-eye fa-xs"></i></a>
                                        <a class="btn btn-xs btn-warning btn-p" href="{{ route('admin.classes.edit', $class_) }}"><i class="fas fa-pen fa-xs"></i></a>
                                        <form method="POST" action="{{ route('admin.classes.destroy', $class_) }}" class="inline">
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
    $('#dataTable').dataTable({
        destroy: true,
        "bFilter": false,
        "order": [[ 4, 'asc' ]], 
        "columns": [
            null,   // Título
            null,   // Tipo
            null,   // Estado
            null,   // Localização
            null,   // Data
            null,   // Hora de Início
            null,   // Hora de Fim
            null,   // Duração
            null,   // Preço
            { "orderable": false } 
        ]
    });
</script>
@endsection
