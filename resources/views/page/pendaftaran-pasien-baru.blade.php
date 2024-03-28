@extends('layouts.app')
@section('title', 'Pendaftaran Pasien Baru')

@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header">
                <h4>Pendaftaran Pasien Baru</h4>
            </div>
            @if (session('error'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: '{{ session('error') }}'
                    });
                </script>
            @endif
            <div class="card-body">
                <form action="{{ route('pendaftaran-pasien-baru.create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                            placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp"
                            placeholder="Masukkan Nomor Telepon">
                    </div>
                    <div class="form-group">
                        <label for="status_perkawinan">Status Perkawinan</label>
                        <select class="form-control" id="status_perkawinan" name="status_perkawinan">
                            <option value="Belum Kawin">Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Janda">Janda</option>
                            <option value="Duda">Duda</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rt">RT</label>
                        <input type="text" class="form-control" id="rt" name="rt" placeholder="Masukkan RT">
                    </div>
                    <div class="form-group">
                        <label for="rw">RW</label>
                        <input type="text" class="form-control" id="rw" name="rw" placeholder="Masukkan RW">
                    </div>
                    <div class="form-group">
                        <label for="pembayaran">Jenis Pembayaran</label>
                        <select class="form-control" id="pembayaran" name="pembayaran">
                            <option value="BPJS">BPJS</option>
                            <option value="Umum">Umum</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}'
            });
        </script>
    @endif


@endsection
