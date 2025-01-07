
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação do Produto
        </div>
        <div class="card-body">
			<div><strong>Nome:</strong> {{ $product->type }} </div>
            <div><strong>Imagem:</strong><br><img src="{{ Storage::url('products/' . $product->image) }}" width="250" alt="Imagem"></div>
			<div><strong>Link:</strong> {{ $product->link }} </div>
		</div>
	</div>
</div>
@endsection
