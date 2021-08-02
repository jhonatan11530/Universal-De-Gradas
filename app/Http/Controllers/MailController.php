<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function Mail(Request $request)
    {
     //   extract($_POST);
        $mensaje= request()->validate([
            'Nombre'=>'required',
            'Apellido'=>'required',
            'Telefono'=>'required',
            'Correo'=>'required|email',
            'Mensaje'=>'required',
        ]);
        Mail::to('ventas@universaldegradas.com')->send(new MessageReceived($mensaje));

        return redirect('contacto');
    }
}
