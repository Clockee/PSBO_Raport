<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Detail Siswa')

@section('container')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Basic Form Elements Block -->
            <div class="block">
                <!-- Basic Form Elements Title -->
                <div class="col-5">
                <h2 class="mt-2"> Nilai Siswa</h2>
                </div>
            </div>
    </div>
</div>
<div class="row-3">
    <div class="col-5">
        <div class="mt-3" >
            <div class="card bg-light mb-3 card-inverse border-success">
                <div class="card-body">
                    <h5>Nama  :{{ $student -> nama }}</h5> 
                    <h5>NIS   :{{ $student -> nis }}</h5>
                    <h5>Kelas :{{ $student -> asrama }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>

                



@endsection
