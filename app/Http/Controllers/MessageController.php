<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function createmessageview()
    {
        return view('creamessaggio');
    }

    public function createmessage(Request $request)
    {
        $username = $request->username;
        $usermessage = $request->usermessage;

        $message = new Message();
        $message->name = $username;
        $message->message = $usermessage;

        $message->save();

        return redirect()->back()->with('success', 'Messaggio salvato con successo!');;
    }

    public function viewmessage()
    {
        $message = Message::all();
        return view('viewmessage', ['messages' => $message]);
    }
}
