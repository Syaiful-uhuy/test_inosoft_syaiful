<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotorController extends Controller
{
    //
    public function spesifikasi_motor($id)
    {
        // dd($id);
        return view('spesifikasi_motor',[
            "image" => "honda-vario.jpg",
            "title" => "Spesifikasi Mobil",
            "edisi" => "Honda Vario 160 CBS",
            "tahun" => "Tahun:  2022",
            "mesin" => "Mesin:  160 CC",
            "tipe" => "Tipe Suspensi: Monoshock",
            "transmisi" => "Tipe Transmisi : Matic",
            "harga" => "Harga:  Rp 26,34 Juta",
            "id" => $id
        ]);
    }
}
