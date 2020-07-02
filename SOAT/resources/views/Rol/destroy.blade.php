@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h3>Eliminar el rol: {{$rol->Descripcion}}</h3></div>
                    <form action = "{{ route('Rol.destroy', $rol->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="descripcion">¿Se encuentra seguro de eliminar el siguiente registro?,
                                    Este no se eliminara completamente de la base de datos pero dejara de ser visible
                                    en cualquier menu de la aplicación, la unica forma de recuperar el registro es
                                    directamente en la base de datos</label>
                                    <button type="submit" class="btn btn-primary">Aceptar</button>
                                    <button type="Reset" class="btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
