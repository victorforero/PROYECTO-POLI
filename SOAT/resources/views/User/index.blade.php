@extends('layouts.app')
@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Cedula</th>
        <th scope="col">Email</th>
        <th scope="col">Licencia</th>
        <th scope="col">Rol</th>
        <th scope="col">Pais</th>
        <th scope="col">Ciudad</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->Nombre}}</td>
        <td>{{$user->Apellido}}</td>
        <td>{{$user->Email}}</td>
        <td>{{$user->Cedula}}</td>
        <td>{{$user->licencia}}</td>
        <td>{{$user->Rol}}</td>
        <td>{{$user->Pais}}</td>
        <td>{{$user->Ciudad}}</td>
        <td><button type="button" class="btn btn-warning">Editar</button>
            <button type="button" class="btn btn-danger">Eliminar</button></td>
      </tr>
        @endforeach
    </tbody>
  </table>


@endsection
