<?php

namespace App\Mail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Bienvenido extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $contraseña;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,$contraseña)
    {
      $this->user = $user;
      $this->contraseña = $contraseña;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("soportes.usuario@biblioteca.org")
                    ->markdown('mail.usuario.creado');
    }
}
