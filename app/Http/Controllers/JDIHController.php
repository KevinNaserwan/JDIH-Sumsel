<?php

namespace App\Http\Controllers;

use App\Models\dokumen;
use App\Models\jenis;
use Illuminate\Http\Request;

class JDIHController extends Controller
{
    //
    public function puu()
    {
        $jenis = jenis::all();
        return view('Pages.puu', ['jenis' => $jenis]);
    }

    public function dokumentasi()
    {
        return view('Pages.dokumentasi');
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function tambahdokumen()
    {
        $jenis = jenis::all();
        return view('admin.tambahdokumne', ['jenis' => $jenis]);
    }

    public function adddokumen(Request $request)
    {
        // Validasi request jika diperlukan

        $dokumen = $request->file('dokumen');

        // Mendapatkan ekstensi file
        $extension = $dokumen->getClientOriginalExtension();

        // Menyusun nama file berdasarkan jenis_dokumen dan angka unik
        $namaFile = $request->input('jenis_dokumen') . '_' . time() . '.' . $extension;

        // Menyimpan file ke direktori penyimpanan (storage/app/public misalnya)
        $path = $dokumen->storeAs('public/dokumen', $namaFile);
        $data = [
            'jenis_dokumen' => $request->input('jenis_dokumen'),
            'nomor' => $request->input('nomor'),
            'tahun' => $request->input('tahun'),
            'judul' => $request->input('judul'),
            'tempat' => $request->input('tempat'),
            'status' => 0,
            'teu' => $request->input('teu'),
            'singkatan' => $request->input('singkatan'),
            'tanggal_tetap' => $request->input('tanggal_tetap'),
            'tanggal_pengundangan' => $request->input('tanggal_pengundangan'),
            'subyek' => $request->input('subyek'),
            'pemrakarsa' => $request->input('pemrakarsa'),
            'sumber' => $request->input('sumber'),
            'bidang' => $request->input('bidang'),
            'urusan' => $request->input('urusan'),
            'bahasa' => $request->input('bahasa'),
            'abstrak' => $request->input('abstrak'),
            'dokumen' => $namaFile,
        ];
        // dd($data);

        dokumen::create($data);
        return back()->with('Success', 'Berhasil Tambah Data');
    }

    public function detailpuu(Request $request, $jenis_dokumen)
    {

        $tahun = $request->input('tahun');

        if ($tahun) {
            $dokumen = dokumen::where('jenis_dokumen', $jenis_dokumen)
                ->where('tahun', $tahun)
                ->get();
        } else {
            // If no specific year is selected, get all documents for the jenis_dokumen
            // Mengambil nilai input dari form
            $nomor = $request->input('nomor');
            $tahun = $request->input('tahun');
            $judul = $request->input('judul');

            // Query awal dengan filter jenis_dokumen
            $query = dokumen::where('jenis_dokumen', $jenis_dokumen);

            // Menambahkan filter berdasarkan nomor jika diinput
            if ($nomor) {
                $query->where('nomor', $nomor);
            }

            // Menambahkan filter berdasarkan tahun jika diinput
            if ($tahun) {
                $query->where('tahun', $tahun);
            }

            // Menambahkan filter berdasarkan judul jika diinput
            if ($judul) {
                $query->where('judul', 'like', '%' . $judul . '%');
            }

            // Menyelesaikan query dan mendapatkan hasil
            $dokumen = $query->get();
        }

        return view('Pages.detailpuu', ['dokumen' => $dokumen, 'jenis_dokumen' => $jenis_dokumen]);
    }



    public function detailpuu2(Request $request, $judul)
    {
        $dokumen = dokumen::where('judul', $judul)->get()->first();
        return view('Pages.detailpuu2', ['dokumen' => $dokumen, 'judul' => $judul]);
    }
}
