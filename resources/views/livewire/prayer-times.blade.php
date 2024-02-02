<div>
    {{-- CLOCK AND DATE --}}
    <div class="flex justify-between items-center mb-2">
        <div class="bg-white bg-opacity-80 py-1 px-3 rounded-lg">
            <h2 class="text-black text-4xl font-teko tracking-wider">
                <span wire:poll.1s>{{ date('H:i:s') }}</span>
            </h2>
        </div>
        <div class="bg-white bg-opacity-80 py-1 px-3 rounded-lg">
            <h2 class="text-black text-4xl font-medium font-teko">
                {{ date('l, d F Y') }}
            </h2>
        </div>
    </div>
    {{-- JADWAL AND KEGIATAN --}}
    <div class="flex justify-between items-start tracking-wide mb-1">
        <div class=" bg-blue-900 bg-opacity-80 py-3 px-4 rounded-lg">
            @livewire('jadwal-jumat-component')
        </div>
        <div class=" bg-blue-900 bg-opacity-80 py-3 px-4 rounded-lg">
            @livewire('kegiatan-masjid-component')
        </div>
    </div>
    {{-- KEUANGAN --}}
    <div class="bg-slate-500 bg-opacity-60 py-4 px-6 rounded-lg tracking-wide">
        <h1 class="font-semibold text-base tracking-wider">KEUANGAN MASJID</h1>
        @livewire('keuangan-masjid-component')
    </div>
    {{-- MENJELANG --}}
    <div class="flex justify-end my-4">
        <div class="bg-white bg-opacity-50 py-1 px-3 rounded-lg">
            <p class="text-black text-sm font-semibold tracking-wide">
                Menjelang 
            @switch($data)
                @case($data['imsyak'] > date('H:i:s'))
                    Imsyak : {{ $data['imsyak'] }} &nbsp; - &nbsp; Countdown: {{ $this->getTimeDifference($data['imsyak']) }}                
                    @break
                @case($data['shubuh'] > date('H:i:s'))
                    Shubuh : {{ $data['shubuh'] }} &nbsp; - &nbsp; Countdown: {{ $this->getTimeDifference($data['shubuh']) }}
                    @break
                @case($data['terbit'] > date('H:i:s'))
                    Terbit : {{ $data['terbit'] }} &nbsp; - &nbsp; Countdown: {{ $this->getTimeDifference($data['terbit']) }}
                    @break
                @case($data['dhuha'] > date('H:i:s'))
                    Dhuha : {{ $data['dhuha'] }} &nbsp; - &nbsp; Countdown: {{ $this->getTimeDifference($data['dhuha']) }}
                    @break
                @case($data['dzuhur'] > date('H:i:s'))
                    Dzuhur : {{ $data['dzuhur'] }} &nbsp; - &nbsp; Countdown: {{ $this->getTimeDifference($data['dzuhur']) }}
                    @break
                @case($data['ashr'] > date('H:i:s'))
                    Ashr : {{ $data['ashr'] }} &nbsp; - &nbsp; Countdown: {{ $this->getTimeDifference($data['ashr']) }}
                    @break
                @case($data['magrib'] > date('H:i:s'))
                    Magrib : {{ $data['magrib'] }} &nbsp; - &nbsp; Countdown: {{ $this->getTimeDifference($data['magrib']) }}
                    @break
                @case($data['isya'] > date('H:i:s'))
                    Isya : {{ $data['isya'] }} &nbsp; - &nbsp; Countdown: {{ $this->getTimeDifference($data['isya']) }}    
                    @break
                @default
                    Jadwal Sholat Hari Ini telah selesai 
                    @break         
            @endswitch
            </p>
        </div>
    </div>
    {{-- SCHEDULE --}}
    <div class="flex justify-between text-lg font-teko">
        @if ($data)
            <div class="bg-slate-800 bg-opacity-75 px-6 py-2 rounded-md">
                Imsyak: <span class="block text-5xl">{{ $data['imsyak'] }}</span> 
            </div>
            <div class="bg-slate-800 bg-opacity-75 px-6 py-2 rounded-md">
                Shubuh: <span class="block text-5xl">{{ $data['shubuh'] }}</span> 
            </div>
            <div class="bg-slate-800 bg-opacity-75 px-6 py-2 rounded-md">
                Terbit: <span class="block text-5xl">{{ $data['terbit'] }}</span> 
            </div>
            <div class="bg-slate-800 bg-opacity-75 px-6 py-2 rounded-md">
                Dhuha: <span class="block text-5xl">{{ $data['dhuha'] }}</span> 
            </div>
            <div class="bg-slate-800 bg-opacity-75 px-6 py-2 rounded-md">
                Dzuhur: <span class="block text-5xl">{{ $data['dzuhur'] }}</span> 
            </div>
            <div class="bg-slate-800 bg-opacity-75 px-6 py-2 rounded-md">
                Ashr: <span class="block text-5xl">{{ $data['ashr'] }}</span> 
            </div>
            <div class="bg-slate-800 bg-opacity-75 px-6 py-2 rounded-md">
                Magrib: <span class="block text-5xl">{{ $data['magrib'] }}</span> 
            </div>
            <div class="bg-slate-800 bg-opacity-75 px-6 py-2 rounded-md">
                Isya: <span class="block text-5xl">{{ $data['isya'] }}</span> 
            </div>
        @else
            <p class="text-xl">Jadwal Sholat tidak ditemukan</p>
        @endif
    </div>
</div>
