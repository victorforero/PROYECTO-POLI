@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-6">
            <div class="col-sm-6">
                <h3>Editar rol: {{$rol->Descripcion}}</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form action = '/Soat' method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="Numero">Número de soat</label>
                        <input type="text" class="form-control" name= "Numero" placeholder="Numero soat">
                    </div>
                    <div class="form-group">
                        <label> Vehiculo</label>
                        <select class="form-control" name="Vehiculo">
                            @foreach($vehiculos as $vehiculo)
                                <option value="{{$vehiculo->id}}">{{$vehiculo->Matricula}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">La generación del Soat es automatica solo tienes que seleccionar el vehiculo al cual asociaras el SOAT</label>
                    </div>
                    <div >
                        <button type="submit" class="btn btn-primary">Generar Soat</button>
                        <button type="Reset" class="btn btn-danger">Cancelar</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
