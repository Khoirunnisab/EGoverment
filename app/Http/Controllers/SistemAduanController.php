<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aduan;
use Illuminate\Support\Str;

class SistemAduanController extends Controller
{
    public function beranda()
    {
        return view('aduan.beranda', [
            'total' => Aduan::count(),
            'selesai' => Aduan::where('status','selesai')->count(),
            'proses' => Aduan::where('status','diproses')->count(),
        ]);
    }

    public function buatAduan()
    {
        return view('aduan.buataduan');
    }

    public function simpanAduan(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'tanggal'=>'required',
            'kategori'=>'required',
            'lokasi'=>'required',
            'deskripsi'=>'required',
        ]);

        $kode = 'ADU-' . date('Y') . '-' . rand(100,999);

        $foto = null;
        if($request->hasFile('foto')){
            $foto = $request->file('foto')->store('foto-aduan');
        }

        Aduan::create([
            'kode_aduan'=>$kode,
            'nama'=>$request->nama,
            'tanggal'=>$request->tanggal,
            'kategori'=>$request->kategori,
            'lokasi'=>$request->lokasi,
            'deskripsi'=>$request->deskripsi,
            'foto'=>$foto,
        ]);

         return view('aduan.aduansukses', [
    'kode' => $kode,
    'nama' => $request->nama
]);
    }

    public function cekStatus()
    {
        return view('aduan.cekstatusaduan');
    }

    public function cariStatus(Request $request)
    {
        $aduan = Aduan::where('kode_aduan',$request->keyword)
                      ->orWhere('nama',$request->keyword)
                      ->first();

        return view('aduan.cekstatusaduan', compact('aduan'));
    }

    public function tentang()
    {
        return view('aduan.tentangkami');
    }

    public function kontak()
    {
        return view('aduan.kontak');
    }
}
