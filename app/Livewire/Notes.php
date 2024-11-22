<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Note;

class Notes extends Component
{
    public $noteslists;
    
    public function mount()
    {
        //
        
        if (Auth::check()) {
            $this->noteslists = Note::where('user_id', Auth::id())->get();
        } else {
            $this->noteslists = collect();
        }
    }
    
        public function render()
        {
            return view('livewire.notes', ['noteslists' => $this->noteslists]);
        }

    public function addNote()
    {
        //        
    }
}
