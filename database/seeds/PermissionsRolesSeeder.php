<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tecnico = Role::create(['name' => 'tecnico']);
        $bibliotecario = Role::create(['name' => 'bibliotecario']);
        $lector = Role::create(['name' => 'lector']);

        $desactivar_usuario = Permission::create(['name' => 'desactivar usuarios']);
        $tecnico->givePermissionTo($desactivar_usuario);

        $registar_libros = Permission::create(['name' => 'registrar libros']);
        $editar_libros = Permission::create(['name' => 'editar libros']);
        $eliminar_libros = Permission::create(['name' => 'eliminar libros']);
        $publicar_mensaje = Permission::create(['name' => 'publicar mensaje']);

        $bibliotecario->givePermissionTo($registar_libros,$editar_libros,$eliminar_libros,$publicar_mensaje);

        $prestar_libro = Permission::create(['name' => 'realizar prestamos']);
        $reservar_libro = Permission::create(['name' => 'realizar reservas']);
        $lector->givePermissionTo($prestar_libro,$registar_libros);



    }
}