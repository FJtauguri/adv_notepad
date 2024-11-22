<?php

namespace App\Livewire\Components;

use App\Models\Note;
use Livewire\Component;

class Button extends Component
{

    public $slotView;
    public $slotContent = true;
    public function render()
    {
        return view('livewire.components.button', [
            'slotView' => $this->slotView,
            'slotContent' => $this->slotContent,
        ]);
    }

    public function mount($slotView = '', $slotContent = '')
    {
        $this->slotView = $slotView;
        $this->slotContent = $slotContent;
    }

    public function addCard()
    {
        $this->notebook->push(new Note());
    }
}
