<?php

namespace App\Livewire\Components;

use App\Models\Note;
use Auth;
use Livewire\Component;

class CardNotes extends Component
{
    public $notebook;

    public function mount()
    {
        if (Auth::check()) {
            $this->notebook = Note::where("user_id", Auth::user()->id)->get();
        } else {
            $this->notebook = collect();
        }
    }

    public function render()
    {
        return view('livewire.components.card-notes', ['notebook' => $this->notebook]);
    }

    public function addCard()
    {
        
    }
}
