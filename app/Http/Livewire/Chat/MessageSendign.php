<?php

namespace App\Http\Livewire\Chat;

use App\Events\PukeEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MessageSendign extends Component
{
    public function messageCreation ($body, $receiver)
    {
        DB::table('messages')->insert([
            'sender'            => auth()->user()->id,
            'receiver'          => $receiver,
            'body'              => $body,
        ]);

        // Broadcasting 
        // event(new NewMessageEvent($body,$receiver));
        event(new PukeEvent('Hello', 1));
}
    public function render()
    {
        return view('livewire.chat.message-sendign');
    }
}
