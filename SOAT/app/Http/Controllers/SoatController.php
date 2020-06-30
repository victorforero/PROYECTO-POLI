<?php

namespace App\Http\Controllers;

use App\Soat;
use Illuminate\Http\Request;

class SoatController extends Controller
{
    public function index ()
    {
        $soats = Soat::all();
        //dd($users);
        return view('Soat.index',['soats' => $soats]);
    }

    public function create()
    {
        return view('Soat.create');
    }

    public function store()
    {

    }
}

