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
<br>
                <div class="col-5">
                <h6 class="mt-2"> Semester 1</h6>
                </div>
                <div class="row-3">
    <div class="col-12">
        <div class="mt-3" >
            <div class="card bg-light mb-3 card-inverse border-success">
                <table class="table" >
                <thead>
                    <tr align="center">
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">H1</th>
                        <th scope="col">H2</th>
                        <th scope="col">H3</th>
                        <th scope="col">H4</th>
                        <th scope="col">H5</th>
                        <th scope="col">H6</th>
                        <th scope="col">H7</th>
                        <th scope="col">H8</th>
                        <th scope="col">HPH</th>
                        <th scope="col">HPST</th>
                        <th scope="col">HPAS</th>
                        <th scope="col">HPA</th>
                        <th scope="col">Predikat</th>
                        <th scope="col">Ubah</th>
                    </tr>
                </thead>
                @foreach($student->mapel as $mapel)
                <tbody>
                    <tr align="center">
                        <td scope="col">{{$mapel->kode}}</td>
                        <td scope="col">{{$mapel->pivot->h1}}</td>
                        <td scope="col">{{$mapel->pivot->h2}}</td>
                        <td scope="col">{{$mapel->pivot->h3}}</td>
                        <td scope="col">{{$mapel->pivot->h4}}</td>
                        <td scope="col">{{$mapel->pivot->h5}}</td>
                        <td scope="col">{{$mapel->pivot->h6}}</td>
                        <td scope="col">{{$mapel->pivot->h7}}</td>
                        <td scope="col">{{$mapel->pivot->h8}}</td>
                        <td scope="col">{{$mapel->pivot->hph}}</td>
                        <td scope="col">{{$mapel->pivot->hpts}}</td>
                        <td scope="col">{{$mapel->pivot->hpas}}</td>
                        <td scope="col">{{$mapel->pivot->hpa}}</td>
                        <td scope="col">92,5</td>
                        <td>
                            <a href="{{ $mapel-> mapel_id }}/edit" type="button" class="badge badge-info list-group-item-success">UBAH</a>
                        </td>
                      </tr>
                </tbody>
                @endforeach
        </table>
        </div>
    </div>
</div>
                



@endsection
