@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Riwayat Pemeriksaan</h2>

    @if(count($riwayat) > 0)
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Tanggal Kunjungan</th>
                    <th>Keluhan</th>
                    <th>Diagnosa</th>
                    <th>Resep Obat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($riwayat as $data)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($data->tanggal_kunjungan)->format('d-m-Y') }}</td>
                        <td>{{ $data->keluhan }}</td>
                        <td>{{ $data->diagnosa ?? '-' }}</td>
                        <td>{{ $data->resep_obat ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada riwayat pemeriksaan.</p>
    @endif
</div>
@endsection
