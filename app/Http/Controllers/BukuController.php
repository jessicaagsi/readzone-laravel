<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class BukuController extends Controller
{
    public function index(){
        return view('index');
    }
    public function dashboard(){
        $buku=Buku::all();
        return view('dashboard',compact('buku'));
    }
    public function buku(){
        $buku=Buku::all();
        return view('buku',compact('buku'));
    }
    public function tambah_buku(){
        return view('tambah-buku');
    }
    public function insert_buku(Request $request){
        $buku=Buku::create([
            'kategori'=> $request->kategori,
            'nama_buku'=> $request->nama_buku,
            'pengarang'=> $request->pengarang,
            'penerbit'=> $request->penerbit,
            'tahun_terbit'=> $request->tahun_terbit,
        ]);
        return redirect('buku');
    }

    public function delete($id){
        $buku=Buku::findOrFail($id);
        $buku->delete();
        return redirect('buku');
    }
    public function cetak(){
        $buku=Buku::all();
        $pdf=Pdf::loadview('cetak',compact('buku'));
        return $pdf->download('laporan.pdf');
    }

}
