<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    public function index ()
    {
        $users = User::where('estado',0)
        ->get();
        //dd($users);
        return view('User.index',['users' => $users]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('User.edit',['user' => $user]);
    }

    public function update(UserFormRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->descripcion = $request->get('descripcion');

        $user->update();

        return redirect('/User');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('User.destroy',['user' => $user]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->estado = 1;
        $user->update();

        return redirect('/User');
    }
}
