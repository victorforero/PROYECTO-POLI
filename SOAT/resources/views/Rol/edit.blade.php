@extends('layouts.app')
@section('content')

<div class="row">
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
    <form action = "{{ route('Rol.update', $rol->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" name= "descripcion" value="{{ $rol->Descripcion }}">
                </div>
                <div >
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="Reset" class="btn btn-danger">Cancelar</button>
                </div>
        </form>
    </div>
</div>

@endsection
