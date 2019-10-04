<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpjController extends Controller
{
    public function index()
    {
        return view('ppj.create');
    }

    public function hitung(Request $request)
    {
        $validate = $this->validate($request, [
            'kpr' => 'required|numeric',
            'kpm' => 'required|numeric',
            'kredit' => 'required|numeric', 
            'bisnis' => 'required|numeric',
            'lainnya' => 'required|numeric',
            'tahun' => 'required|numeric',
            'bulan' => 'required|numeric',
            'bunga' => 'required|numeric',
        ]);
      
        $kewajiban = array_sum($request->only(['kpr', 'kpm', 'bisnis', 'kredit', 'lainnya']));
        
        $tahun = $request->tahun;
        $bulan = $request->bulan;
        $bunga = $request->bunga;

        //hitung proses bunga
        $hitung_bunga = $bunga/100;
        
        //hitung up ideal
        $hitung_ideal = ($tahun/$hitung_bunga)+$kewajiban;
        
        //hitung up minimal
        $hitung_minimal = (($bulan*12)/$hitung_bunga)+$kewajiban;
        
        
         return view('ppj.show',[
             'data' => $request,
             'kewajiban' => $kewajiban,
             'tahun' => $tahun,
             'bulan' => $bulan,
             'hitung_bunga' => $hitung_bunga,
             'hitung_ideal' => $hitung_ideal,
             'hitung_minimal' => $hitung_minimal
             ]);

        
    }
}
