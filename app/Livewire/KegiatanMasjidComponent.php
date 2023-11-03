<?php

namespace App\Livewire;

use App\Models\KegiatanMasjid;
use Livewire\Component;

class KegiatanMasjidComponent extends Component
{
    public $data;
    public function mount()
    {
        $kegiatan = KegiatanMasjid::all();
        $this->data = $kegiatan;
    }
    public function render()
    {
        return view('livewire.kegiatan-masjid-component');
    }
}
