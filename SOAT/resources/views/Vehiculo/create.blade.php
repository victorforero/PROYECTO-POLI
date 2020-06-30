@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-6">
            <form action = '/Vehiculo' method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label> Tipo de vehiculo</label>
                        <select class="form-control" name="Marca">
                            @foreach($Tipos as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->Descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Matricula</label>
                        <input type="text" class="form-control" name= "Matricula" placeholder="Escriba el número de matricula">
                    </div>
                    <div class="form-group">
                        <label> Conductor</label>
                        <select class="form-control" name="Conductor">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->Nombre}} {{$user->Apellido}}</option>
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
