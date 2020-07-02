<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\VehiculoFormRequest;
use App\Tipo;
use App\Vehiculo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class VehiculoController extends Controller
{
    public function index ()
    {
        $vehiculos = Vehiculo::where('estado',0)
        ->get();
        //dd($users);
        return view('Vehiculo.index',['vehiculos' => $vehiculos]);
    }

    public function create()
    {
        $users = User::all();
        $Tipos = Tipo::all();
        return view('Vehiculo.create',['users' => $users, 'Tipos' =>$Tipos]);
    }

    public function store()
    {
        $vehiculo = new Vehiculo();

        $vehiculo->Marca = request('Marca');
        $vehiculo->Matricula = request('Matricula');
        $vehiculo->Conductor = request('Conductor');

        $vehiculo->save();
        return redirect('/Vehiculo');
    }

    public function edit($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $users = User::all();
        $Tipos = Tipo::all();
        return view('Vehiculo.edit',['users' => $users, 'Tipos' =>$Tipos, 'Vehiculo'=>$vehiculo]);
    }

    public function update(VehiculoFormRequest $request, $id)
    {


        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->Marca = $request->get('Marca');
        $vehiculo->Matricula = $request->get('Matricula');
        $vehiculo->Conductor = $request->get('Conductor');

        $vehiculo->update();


        return redirect('/Vehiculo');
    }

    public function show($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        return view('Vehiculo.destroy',['vehiculo' => $vehiculo]);
    }

    public function destroy($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->estado = 1;
        $vehiculo->update();

        return redirect('/Vehiculo');
    }
}
