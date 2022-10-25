@extends('layouts.main')


@section('container')
<h2>Halaman Motor</h2>
    <img src="img/{{ $image }}" alt="{{ $edisi }}" width="200">
    <h3><a href="/motor/spesifikasi_motor/{{ $edisi }}">{{ $edisi }}</a></h3>
    <h5>{{ $tahun }}</h5> 
    <h5>{{ $warna }}</h5>
    <h5>{{ $harga }}</h5>    
@endsection