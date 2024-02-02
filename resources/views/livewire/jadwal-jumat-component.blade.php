<div class="text-base">
    <H1 class="font-semibold">JADWAL JUMAT</H1>
    @if ($tanggal == null)
        <p>Tidak ada jadwal jumat</p>
    @else
        <p>{{ date('l, d F Y', strtotime($tanggal)) }}</p>
        <table>
            <tr>
                <td>Imam</td>
                <td>: {{ $imam }}</td>
            </tr>
            <tr>
                <td>Khotib</td>
                <td>: {{ $khotib }}</td>
            </tr>
            <tr>
                <td>Muazin</td>
                <td>: {{ $muazin }}</td>
            </tr>
            <tr>
                <td>Judul Khotbah &nbsp;&nbsp;</td>
                <td>: {{ $judul_khotbah }}</td>
            </tr>
        </table>
    @endif
</div>
