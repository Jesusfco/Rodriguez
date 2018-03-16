<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;

class AmerigasMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
     {   
        return $this->view('mail.contact',[
            'text'=> $request->mensaje, 
            'client' => $request->nombre, 
            'mail' => $request->correo])
            // ->to('rodriguez@amerigas.mx', 'Correspondiente')
            // ->to('jfcr@live.com', 'Correspondiente')
                ->to('ventasamerigas@gmail.com', 'Amerigas Services')
                ->subject('Amerigas.mx || ' . $request->nombre . ' se esta contactando contigo.')
                ->from($request->correo, $request->nombre);
        
    }
}
