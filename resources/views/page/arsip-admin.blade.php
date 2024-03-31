@extends('layouts.app')
@section('title', 'Arsip Pendaftaran')

@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-body">
                <h3>Daftar Pendaftaran Terdaftar</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No. RM</th>
                            <th scope="col">Tanggal Pendaftaran dan No Antrian</th>
                            <th scope="col">Status</th>
                            <th scope="col">Check tiket</th> <!-- Kolom untuk tombol -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftarPendaftaran as $pendaftaran)
                            <tr>
                                <td>{{ $pendaftaran->pasien->no_rm }}</td>
                                <td>{{ $pendaftaran->tanggal_pendaftaran }} ,{{ $pendaftaran->no_antrian }}</td>
                                <td>{{ $pendaftaran->status }}</td>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#modal-{{ $pendaftaran->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="modal-{{ $pendaftaran->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <!-- Tampilkan detail pendaftaran di sini -->
                                                <img src="https://marketplace.canva.com/EAE4oLXwWVs/1/0/1600w/canva-biru-tua-dan-biru-kehijauan-gradasi-modern-dokter-logo-kesehatan-B5VpOl-RH1w.jpg"
                                                    alt="Logo" class="mb-3 d-block mx-auto"
                                                    style="max-width: 30%; text-align: center;">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail Pendaftaran</h5>
                                                <p>No. RM: {{ $pendaftaran->pasien->no_rm }}</p>
                                                <p>No. Antrian: {{ $pendaftaran->no_antrian }}</p>
                                                <p>Tanggal Pendaftaran: {{ $pendaftaran->tanggal_pendaftaran }}</p>
                                                <p>Status: {{ $pendaftaran->status }}</p>
                                                <p>Diagnosa Dokter</p>
                                                <p>{{ $pendaftaran->diagnosa }}</p>
                                                <!-- Tambahkan detail lainnya sesuai kebutuhan -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
