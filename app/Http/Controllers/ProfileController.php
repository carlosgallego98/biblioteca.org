<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function cambiarContraseña(Request $request)
    {
        $data = $request->toArray();
        if (Hash::check($data['password'], Auth::user()->password)) {
            $request->validate([
                'new' => "confirmed:confirmation"
            ]);

            if($data['new'] == $data['confirmation']){
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($data['new']);
                $user->save();

                return redirect()->route('perfil')->with('msj',"Contraseña modificada exitosamente");;
            }
        }
    }
}
