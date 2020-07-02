<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolFormRequest;
use App\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        $rols = Rol::where('estado',0)
        ->get();
        //dd($users);
        return view('Rol.index',['rols' => $rols]);
    }

    public function create()
    {
        return view('Rol.create');
    }

    public function store()
    {
        $rol = new Rol();
        $rol->descripcion = request('descripcion');

        $rol->save();
        return redirect('/Rol');
    }

    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        return view('Rol.edit',['rol' => $rol]);
    }

    public function update(RolFormRequest $request, $id)
    {
        $rol = Rol::findOrFail($id);
        $rol->descripcion = $request->get('descripcion');

        $rol->update();

        return redirect('/Rol');
    }

    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return view('Rol.destroy',['rol' => $rol]);
    }

    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->estado = 1;
        $rol->update();

        return redirect('/Rol');
    }
}
