<?php

namespace App\Livewire;

use App\Models\JadwalJumat;
use Livewire\Component;

class JadwalJumatComponent extends Component
{
    public $tanggal;
    public $imam;
    public $khotib;
    public $muazin;
    public $judul_khotbah;
    public function mount()
    {
        $data = JadwalJumat::where('is_active', 1)->first();
        
        $this->tanggal = $data->tanggal;
        $this->imam = $data->imam;
        $this->khotib = $data->khotib;
        $this->muazin = $data->muazin;
        $this->judul_khotbah = $data->judul_khotbah;
    }

    public function render()
    {
        return view('livewire.jadwal-jumat-component');
    }
}
