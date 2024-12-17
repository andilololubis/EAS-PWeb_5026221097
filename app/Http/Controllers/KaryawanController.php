<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        // // mengambil data dari table karyawan
        // // $karyawan = DB::table('karyawan')->get();
        // $pagination = $request->query('pagination', 10);

        // $karyawan = DB::table('karyawan')->paginate($pagination);

        // // mengirim data karyawan ke view index
        // return view('index', ['karyawan' => $karyawan]);


        // menangkap data pencarian
		$cari = $request->cari;

        // mengatur jumlah pagination
        $pagination = $request->query('pagination', 10);

    	// mengambil data dari table pegawai sesuai pencarian data
        if($cari == null) {
            $karyawan = DB::table('karyawan')->paginate($pagination);
        } else {
            $karyawan = DB::table('karyawan')
            ->where('namalengkap','like',"%".$cari."%")
            ->paginate($pagination);
        }


    	// mengirim data karyawan ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        return view('tambahkaryawan');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

        // mengatur jumlah pagination
        $pagination = $request->query('pagination', 10);

    	// mengambil data dari table pegawai sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate($pagination);

    	// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);
	}

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // redirect halaman ke halaman pegawai
        return redirect('/karyawan');
    }

    // method untuk hapus data pegawai
    public function delete($id)
    {
        // hapus data pegawai berdasarkan id
        DB::table('karyawan')->where('kodepegawai', $id)->delete();

        // redirect halaman kembali ke halaman pegawai
        return redirect('/karyawan');
    }
}