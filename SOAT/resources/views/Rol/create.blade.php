@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-6">
            <form action = '/Rol' method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name= "descripcion" placeholder="Escriba el nombre del rol">
                    </div>
                    <div >
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="Reset" class="btn btn-danger">Cancelar</button>
                    </div>
            </form>
        </div>
    </div>

@endsection
