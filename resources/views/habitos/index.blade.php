@extends('adminlte::default')

@section('content')

<div class="container-fluid">
	<h3>Hábitos</h3>
	<table class="table table-stripped table-bordered table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Tipo</th>
				<th>Ações</th>
			</tr>
		</thead>
        <tbody>
			@foreach($habitos as $hab)
			<tr>
				<td>{{$hab->id}}</td>
				<td>{{$hab->nome}}</td>
				<td>{{$hab->descricao}}</td>
				@if ($hab->tp_habito == 'B')
				<td>Bom
				@elseif($hab->tp_habito == 'R')
				<td>Ruim
				@endif</td>
				<td><a href="{{ route('habitos.edit', ['id'=>$hab->id]) }}" class="btn-sm btn-primary">Editar</a>
					<a href="#" onclick="return ConfirmaExclusao({{$hab->id}})" class="btn-sm btn-danger">Excluir</a>
				</td>
			</tr>
			@endforeach
        </tbody>
    </table>
    {{ $habitos->links() }}
    <a href="{{ route('habitos.create') }}" class="btn btn-info">Novo</a>
</div>
@endsection

@section('table-delete')
"habitos"
@endsection
