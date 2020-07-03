<?php

namespace App\Http\Controllers;

use App\Soat;
use App\Vehiculo;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\SoatFormRequest;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SoatController extends Controller
{
    public function index ()
    {
        $soats = Soat::where('estado',0)
        ->get();
        //dd($users);
        return view('Soat.index',['soats' => $soats]);
    }

    public function create()
    {
        $vehiculos = Vehiculo::where('estado',0)
        ->get();
        return view('Soat.create',['vehiculos' => $vehiculos]);
    }

    public function store(SoatFormRequest $request)
    {
        $carbon = new Carbon();

        $soat = new Soat();
        $fechaf = $carbon->now();
        $fecha = $fechaf->format('Y-m-d');

        $fechae = $fechaf->addYear();
        $fechaexpieracion = $fechae->format('Y-m-d');



        $soat->Numero = $request->get('Numero');
        $soat->Fecha_compra = $fecha;
        $soat->Fecha_expiracion = $fechaexpieracion;
        $soat->Vehiculo = $request->get('Vehiculo');

        $soat->save();

        return redirect('/Soat');



    }

}

