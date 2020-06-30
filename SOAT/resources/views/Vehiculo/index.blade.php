@extends('layouts.app')
@section('content')

<h2>Lista de Vehiculos <a href="Vehiculo/create"><button type="button" class="btn btn-success float-right">Crear</button></a></h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Marca</th>
            <th scope="col">Matricula</th>
            <th scope="col">Conductor</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vehiculos as $vehiculo)
        <tr>
            <th scope="row">{{$vehiculo->Id}}</th>
            <td>{{$vehiculo->Marca}}</td>
            <td>{{$vehiculo->Matricula}}</td>
            <td>{{$vehiculo->Conductor}}</td>
            <td><a href="{{route('Vehiculo.edit', $vehiculo->id)}}"><button type="button" class="btn btn-warning">Editar</button></a>
            <button type="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
