@component('mail::message')
# Se ha creado tu usuario

Hola {{ $user->name }}, bienvenido a **Blbioteca.org**

Tu usuario se ha creado exitosamente, y estas son tus credenciales.
@component('mail::panel')
  ** Correo: ** {{ $user->email }} <br>
  ** Contraseña: ** {{ $contraseña }} <br>
@endcomponent

Lo primero que debes hacer es cambira la tu contraseña haciendo clic en el siguiente botón.
@component('mail::button', [ 'url' => url("/perfil/cambiar-contraseña") ])
    Cambiar contraseña
@endcomponent

Si llegas a olvidar tu contraseña, la podrás recuperar a través de este correo.

Saludos, y que estés bien!
@endcomponent
