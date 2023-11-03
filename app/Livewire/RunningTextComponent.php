<?php

namespace App\Livewire;

use App\Models\RunningText;
use Livewire\Component;

class RunningTextComponent extends Component
{
    public $data;
    public function mount()
    {
        $text = RunningText::all();
        $this->data = $text;
    }
    public function render()
    {
        return view('livewire.running-text-component');
    }
}
