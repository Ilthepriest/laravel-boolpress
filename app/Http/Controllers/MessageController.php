<?php

namespace App\Http\Controllers;
use App\Mail\AdminContactMessage;
use App\Mail\ContactMessageConfirmation;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function index (){
        return view('guest.message-confirmation');
    }

    public function store(Request $request)
    {
        // ddd($request->all);
        //salva i dati in una variabile
        $data = $request->all();
        //crea istanza del messaggio
        $message = Message::create($data);
        //invia email ad admin
        Mail::to('admin@blog.com')->send(new AdminContactMessage($message));
        //invia una copia della email al user
        Mail::to($message->email)->send(new ContactMessageConfirmation($message));
        //redirect utente
        return redirect()->route('contact-form.index')->with('message', 'Message received');
        
    }
}
