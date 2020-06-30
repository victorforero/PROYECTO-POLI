@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h3>Editar Vehiculo: {{$Vehiculo->Matricula}}</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action = "{{ route('Vehiculo.update', $Vehiculo->id) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label> Tipo de vehiculo</label>
                        <select class="form-control" name="Marca">
                            @foreach($Tipos as $tipo)
                                @if($tipo->id === $Vehiculo->Marca)
                                    <option value="{{$tipo->id}}" selected>{{$tipo->Descripcion}}</option>
                                @else
                                    <option value="{{$tipo->id}}" >{{$tipo->Descripcion}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Matricula</label>
                    <input type="text" class="form-control" name= "Matricula" value="{{$Vehiculo->Matricula}}" placeholder="Escriba el número de matricula">
                    </div>
                    <div class="form-group">
                        <label> Conductor</label>
                        <select class="form-control" name="Conductor">
                            @foreach($users as $user)
                                @if($user->id === $Vehiculo->Conductor)
                                <option  value="{{$user->id}}" selected>{{$user->Nombre}} {{$user->Apellido}}</option>
                                @else
                                <option value="{{$user->id}}">{{$user->Nombre}} {{$user->Apellido}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div >
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="Reset" class="btn btn-danger">Cancelar</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
