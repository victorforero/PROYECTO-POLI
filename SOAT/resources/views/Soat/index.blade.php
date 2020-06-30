@extends('layouts.app')
@section('content')

<h2>Soats Vendidos <a href="Soat/create"><button type="button" class="btn btn-success float-right">Crear</button></a></h2>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Numero</th>
            <th scope="col">Fecha de compra</th>
            <th scope="col">Fechad de expiracion</th>
            <th scope="col">Vehiculo</th>
        </tr>
    </thead>
    <tbody>
    @foreach($soats as $soat)
        <tr>
            <th scope="row">{{$soat->id}}</th>
            <td>{{$soat->Numero}}</td>
            <td>{{$soat->Fecha_compra}}</td>
            <td>{{$soat->Fecha_expiracion}}</td>
            <td>{{$soat->Vehiculo}}</td>
            <td><button type="button" class="btn btn-warning">Editar</button></td>
            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
