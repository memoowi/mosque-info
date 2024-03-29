<div class="flex flex-col lg:flex-row justify-between gap-4">
    <div class="text-base flex flex-col gap-6">
        @if($data)
            <div class="flex flex-col md:flex-row gap-6 mt-4">
                <p> @svg('heroicon-o-arrow-down', 'w-6 h-6 inline') Total Pemasukan : <span>Rp. {{ number_format($data->sum('pemasukan'), 0, ',', '.') }}</span></p>
                <p> @svg('heroicon-o-arrow-up', 'w-6 h-6 inline') Total Pengeluaran : <span>Rp. {{ number_format($data->sum('pengeluaran'), 0, ',', '.') }}</span></p>
            </div>
            <p>Total : <span>Rp. {{ number_format($data->sum('pemasukan') - $data->sum('pengeluaran'), 0, ',', '.') }}</span></p>
        @endif
    </div>
    <div class="text-sm md:text-base card-container">
        @foreach ( $data as $item )
        <div class="card">
            <p><span>{{ date('l, d F Y', strtotime($item->tanggal)) }}</span></p>
            <hr>
            <table class="me-10">
                <tr>
                    <td>Uraian</td>
                    <td>: &nbsp;&nbsp;{{ $item->uraian }}</td>
                </tr>
                <tr>
                    <td>Pemasukan</td>
                    <td>: &nbsp;&nbsp;Rp. {{ number_format($item->pemasukan, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Pengeluaran &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>: &nbsp;&nbsp;Rp. {{ number_format($item->pengeluaran, 0, ',', '.') }}</td>
                </tr>
            </table>
            <hr>
        </div>
        @endforeach
    </div>

</div>
