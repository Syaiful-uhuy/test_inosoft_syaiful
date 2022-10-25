@extends('layouts.main')


@section('container')
<h2>Halaman Spesifikasi Mobil</h2>
<br>
    <img src="/img/{{ $image }}" alt="{{ $edisi }}" width="250">
    <strong> <hr style="width: 500px"></strong>
   
    <h3>
        {{ $id }}
    </h3>
    <h5>{{ $harga }}</h5>   
    <h5>{{ $tahun }}</h5> 
    <h5>{{ $mesin }}</h5>
    <h5>{{ $kapasitas }}</h5>
    <h5>{{ $tipe }}</h5>

@endsection