@extends('layouts.app')
@section('content')

<h2>Tipo de vehiculos <a href="Tipo/create"><button type="button" class="btn btn-success float-right">Crear</button></a></h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Descripcion</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipos as $tipo)
        <tr>
            <th scope="row">{{$tipo->id}}</th>
            <td>{{$tipo->Descripcion}}</td>
            <td> <a href="{{route('Tipo.edit', $tipo->id)}}"> <button type="button" class="btn btn-warning">Editar</button> </a>
                 <a href="{{route('Tipo.show', $tipo->id)}}"><button type="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
