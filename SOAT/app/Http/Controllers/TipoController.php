<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\TipoFormRequest;
use App\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index ()
    {
        $tipos = Tipo::where('estado',0)
        ->get();
        //dd($users);
        return view('Tipo.index',['tipos' => $tipos]);
    }

    public function create ()
    {
        return view('Tipo.create');
    }

    public function Store ()
    {
        $tipo = new Tipo();
        $tipo->descripcion = request('descripcion');

        $tipo->save();

        return redirect('/Tipo');
    }
    public function edit($id)
    {
        $tipo = Tipo::findOrFail($id);
        return view('Tipo.edit',['tipo' => $tipo]);
    }


    public function update(TipoFormRequest $request, $id)
    {

        $tipo = Tipo::findorFail($id);

        $tipo->Descripcion = $request->get('descripcion');

        $tipo->update();
        return redirect('/Tipo');
    }

    public function show($id)
    {
        $tipo = Tipo::findOrFail($id);
        return view('Tipo.destroy',['tipo' => $tipo]);
    }

    public function destroy($id)
    {
        $tipo = Tipo::findOrFail($id);
        $tipo->estado = 1;
        $tipo->update();

        return redirect('/Tipo');
    }
}

