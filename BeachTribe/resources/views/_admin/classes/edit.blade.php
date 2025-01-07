@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Editar Aula</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar: {{ $class_->title }}</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.classes.update', $class_->id) }}">
                @csrf
                @method('PUT')

                <!-- Formulário de Edição -->
                @include('_admin.classes.partials.add-edit')

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    <a href="{{ route('admin.classes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
