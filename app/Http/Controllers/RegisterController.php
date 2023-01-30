<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class RegisterController extends Controller
{
    public function create(){
        return view('usi.register');
    }
    public function store(Request $request){
        //defino los roles admin y user
        //una vez creado un usuario comento las 2 siguientes lineas, seria parecido a usar tinker
        //Role::create(['name' => 'admin']);
        //Role::create(['name' => 'cliente']);
        $user=new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        //asigno roles a los registros-> un admin y el resto users
        //asignar rol
        //$user->assignRole('admin');
        if((Str::endsWith($user->email, 'admin.com'))||(Str::endsWith($user->email, 'admin.es') )) {
            $user->assignRole('admin');
        } else {
            $user->assignRole('cliente');
        }
        //me logueo al registrarme
        auth()->login($user);
        return redirect()->route('go-email');
    }
}
