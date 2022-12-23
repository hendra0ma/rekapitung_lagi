<?php

namespace App\Http\Livewire;

use App\Events\ChatEvent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatPerson extends Component
{

    public $pesan;
    public function render()
    {
        return view('livewire.chat-person');
    }
    public function store()
    {
        $this->pesan = trim($this->pesan);
        if ($this->pesan != "") {
            ChatPerson::create([
                'message' => $this->pesan,
                'send_by' => Auth::user()->id,
                'role_id' => Auth::user()->role_id,
                'time' => now()
            ]);
            $this->pesan = "";
            event(new ChatEvent('person'));
            $this->emit('pesanTersimpan');
        }
    }
}
