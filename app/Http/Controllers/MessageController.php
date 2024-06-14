<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    public function message_create()
    {
        return view('message.create');
    }

    public function message_view()
    {
        $message = Message::all();
        return view('message.view', ['messages' => $message]);
    }

    public function message_store(MessageRequest $request)
    {

        $username = $request->username;
        $userobject = $request->userobject;
        $usermessage = $request->usermessage;

        $img = null;
        if ($request->file('img')) {
            $img = $request->file('img')->store('public/img');
        }



        Message::create([
            'username' => $username,
            'userobject' => $userobject,
            'usermessage' => $usermessage,
            'img' => $img
        ]);

        return redirect()->back()->with('success', 'Messaggio salvato con successo!');;
    }
}
