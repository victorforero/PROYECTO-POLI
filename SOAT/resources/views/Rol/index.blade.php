@extends('layouts.app')
@section('content')

<h2>Lista de roles <a href="Rol/create"><button type="button" class="btn btn-success float-right">Crear</button></a></h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Descripción</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rols as $rol)
        <tr>
            <th scope="row">{{$rol->id}}</th>
            <td>{{$rol->Descripcion}}</td>
            <td> <a href="{{route('Rol.edit', $rol->id)}}"><button type="button" class="btn btn-warning">Editar</button></a>
            <button type="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
