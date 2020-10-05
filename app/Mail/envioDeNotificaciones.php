<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class envioDeNotificaciones extends Mailable
{
    use Queueable, SerializesModels;

public $subject = "Mensaje Informativo";
public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try {
          //retorna la vista con ningun dato null
            return $this->view('Notificaciones.Notificacion')->attach($this->data['file'],[
                        'as' =>$this->data['file']->getClientOriginalName()  //obtiene el nombre original del archivo
                    ]);

        } catch (\Exception $e) {
          return $e->getMessage();
    }
  }
}
