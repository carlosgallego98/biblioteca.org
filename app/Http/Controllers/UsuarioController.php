<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Mail\Bienvenido;
use Hash;
use Mail;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $roles = Role::whereName("bibliotecario")->get();
        return view("admin.usuarios.index",compact("roles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        "name" => "required|min:3|max:20",
        "surname" => "required|min:3|max:20",
        "email" => "required|unique:users",
        "phonenumber" => "required|unique:users|numeric|",
        "direction" => "required"
      ]);

      $rol = Role::find($request->rol);
      $contraseña = uniqid();

      $user = User::create([
        "name" => $request->name,
        "surname" => $request->surname,
        "email" => $request->email,
        "phonenumber" => $request->phonenumber,
        "direction" => $request->direction,
        "password" => Hash::make($contraseña)
      ]);
      $user->assignRole($rol);

      Mail::to($request->email)
          ->queue(new Bienvenido($user,$contraseña));

      return redirect()->route('usuarios.index')->with('msj',"Usuario Creado, Enviando Correo de bienvenida...");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view("admin.usuarios.show",compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function datatable($rol = "")
    {
      if ($rol != "") {
        $usuarios = User::select("id","name","surname","email")->role($rol)->get();
      }else{
        $usuarios = User::select("id","name","surname","email")->get();
      }
      return Datatables::of($usuarios)
        ->addColumn("details",function($user){
            return "<a href='" .route('usuarios.show',$user). "'> Detalles </a>";
        })
        ->addColumn("rol",function(User $user){
          return "<span style='text-transform: capitalize'>". $user->getRoleNames()[0]."</span>";
        })
        ->rawColumns(['details','rol'])
        ->toJson();
    }
}
