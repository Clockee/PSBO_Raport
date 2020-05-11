<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Detail Siswa')

@section('container')
<div class="row-3">
    <div class="col-5">
        <div class="mt-3" >
            <div class="card bg-light mb-3 card-inverse border-success">
                <div class="card-header">Data Siswa</div>
                <div class="card-body">
                    <h4 class="card-title">Nama : {{ $student -> nama }}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">NIS : {{ $student -> nis }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Asrama : {{ $student -> asrama }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Jenis Kelamin : {{ $student -> jenis_kelamin }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tempat Lahir : {{ $student -> tempat_lahir }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal Lahir : {{ $student -> tanggal_lahir }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Golongan_Darah : {{ $student -> golongan_darah }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tinggi Badan : {{ $student -> tinggi_badan }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Berat Badan : {{ $student -> berat_badan }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Alamat : {{ $student -> alamat }}</h6>

                    <h4 class="card-title">Ayah</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Nama : {{ $student -> nama_ayah }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tempat Lahir : {{ $student -> tempat_lahir_ayah }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal Lahir : {{ $student -> tanggal_lahir_ayah }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Pekerjaan : {{ $student -> pekerjaan_ayah }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Alamat : {{ $student -> alamat_ayah }}</h6>
                    <h4 class="card-title">Ibu</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Nama : {{ $student -> nama_ibu }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tempat Lahir : {{ $student -> tempat_lahir_ibu }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal Lahir : {{ $student -> tanggal_lahir_ibu }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Pekerjaan : {{ $student -> pekerjaan_ibu }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Alamat : {{ $student -> alamat_ibu }}</h6>

                    <a href="{{ $student-> id }}/edit" type="submit" class="btn btn-primary">Edit</a>

                    <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                        <!-- Manipulasi Method Delete -->
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <a href="/students" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
