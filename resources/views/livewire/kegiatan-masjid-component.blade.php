<div class="text-xl">
    <h1 class="font-bold">KEGIATAN MASJID</h1>
    <hr class="mb-3">
    @foreach ($data as $item )    
    <h4 class="font-semibold">{{ $item->nama_kegiatan }}</h4>
    <table>
        <tr>
            <td>Tempat</td>
            <td>: {{ $item->tempat }}</td>
        </tr>
        <tr>
            <td>Tanggal &nbsp;&nbsp;</td>
            <td>: {{ date('l, d F Y', strtotime($item->tanggal)) }}</td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td>: {{ date('H:i', strtotime($item->waktu)) }} &nbsp;WIB</td>
        </tr>
    </table>
    <hr class="my-3">
    @endforeach
</div>
