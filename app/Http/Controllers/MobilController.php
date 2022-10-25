<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    //
    public function spesifikasi($id)
    {
        // dd($id);
        return view('spesifikasi',[
            "image" => "hoda-brv.jpg",
            "title" => "Spesifikasi Mobil",
            "edisi" => "All New Honda BR-V S MT",
            "slug" => "honda-brv",
            "tahun" => "Tahun:  2020",
            "mesin" => "Mesin: 1500 CC",
            "kapasitas" => "Kapasitas Penumpang: 6 Orang",
            "tipe" => "Tipe : City Car",
            "harga" => "Harga:  Rp281.1 Juta",
            "id" => $id
        ]);
    }
 
}
