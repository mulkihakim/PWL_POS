<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
    public function create() 
    {
        return  view('kategori.create');
    }
    public function store(Request $request) 
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori, 
            'kategori_nama' => $request->namaKategori
        ]);
        return redirect('/kategori');
    }
    public function edit($id) {
        $kategori = KategoriModel::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }
    public function update($id, Request $request) {
        $kategori = KategoriModel::findOrFail($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();
        // $kategori->update([
        //     'kategori_kode' => $request->kodeKategori,
        //     'kategori_nama' => $request->namaKategori
        // ]);
        return redirect('/kategori');
    }
    public function delete($id) {
        $kategori = KategoriModel::findOrFail($id);
        $kategori->delete();

        return redirect('/kategori');
    }
    // public function index() {
    //     // $data = [
    //     //     'kategori_kode' => 'SMK', 
    //     //     'kategori_nama' => 'Snack/ Makanan Ringan', 
    //     //     'created_at' => now()
    //     // ];
    //     // DB::table('m_kategori')->insert($data);
    //     // return 'Insert data baru berhasil';

    //     // $row = DB::table('m_kategori')->where('kategori_kode', 'SMK')->update(['kategori_nama' => 'Camilan']);
    //     // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

    //     // $row = DB::table('m_kategori')->where('kategori_kode', 'SMK')->delete();
    //     // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

    //     $data = DB::table('m_kategori')->get();
    //     return view('kategori', ['data' => $data]);
    // }
    
}
