@extends('layouts.main')


@section('container')
<h2>Halaman Spesifikasi Motor</h2>
<br>
<img src="/img/{{ $image }}" alt="{{ $edisi }}" width="250">
<strong> <hr style="width: 500px"></strong>

<h5>{{ $id }}</h5> 
<h5>{{ $harga }}</h5>   
    <h5>{{ $tahun }}</h5> 
    <h5>{{ $mesin }}</h5>
    <h5>{{ $tipe }}</h5>
    <h5>{{ $transmisi }}</h5>   

@endsection