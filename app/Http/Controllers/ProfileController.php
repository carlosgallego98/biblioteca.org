<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Image;
use File;

class ProfileController extends Controller
{
    public function cambiarContraseña(Request $request)
    {
        $data = $request->toArray();
        if (Hash::check($data['password'], Auth::user()->password)) {
            if($data['new'] == $data['new_confirmation']){
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($data['new']);
                $user->save();

                return redirect()->route('perfil')->with('msj',"Contraseña modificada exitosamente");;
            }else{
              return redirect()->back()->withErrors(['La contraseñas no coinciden']);
            }
        }else{
          return redirect()->back()->withErrors(['La contraseña actual no es correcta']);
        }
    }

    public function cambiarAvatar(Request $request)
    {
      $usuario = Auth::user();

      $this->validate($request, [
        'avatar' => 'required',
        'avatar.*' => 'image|mimes:jpeg,png,jpg|max:2048'
      ]);

      if ($request->hasFile('avatar')) {
        if($usuario->avatar != ""){
          $viejo_avatar = "public/avatars/{$usuario->avatar}";
          Storage::delete($viejo_avatar);
        }

        $img = Image::make($request
          ->file("avatar"))
          ->fit(530, 530)
          ->encode("png");

        $hash = md5($img->__toString());
        $directorio = "public/avatars/{$hash}.png";
        Storage::put($directorio, $img->__toString());

        $usuario->avatar = "{$hash}.png";
        $usuario->save();

        return redirect()->route("perfil");
      }else{
        return "No hay Imagen";
      }
    }
}
