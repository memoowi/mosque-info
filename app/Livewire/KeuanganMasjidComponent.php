<?php

namespace App\Livewire;

use App\Models\KeuanganMasjid;
use Livewire\Component;

class KeuanganMasjidComponent extends Component
{
    public $data;
    public function mount()
    {
        $keuangan = KeuanganMasjid::all();
        $this->data = $keuangan;
    }
    public function render()
    {
        return view('livewire.keuangan-masjid-component');
    }
}
