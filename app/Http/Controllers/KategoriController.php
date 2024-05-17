<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Kategori',
            'list' => ['Home', 'Kategori']
        ];

        $page = (object) [
            'title' => 'Daftar kategori yang terdaftar dalam sistem'
        ];

        $activeMenu = 'kategori';

        return view('kategori.index', [
            'breadcrumb' => $breadcrumb, 
            'page' => $page, 
            'activeMenu' => $activeMenu
        ]);
        // return $dataTable->render('kategorilama.index');
    }
    public function list()
    {
        $categories = KategoriModel::all();
        
        return DataTables::of($categories)
            ->addIndexColumn()
            ->addColumn('aksi', function($category) {
                $btn = '<a href="'.url('/kategori/' . $category->kategori_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/kategori/' . $category->kategori_id . '/edit').'"class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="'.
                url('/kategori/'.$category->kategori_id).'">' . csrf_field() . method_field('DELETE') .
                    '<button 
                        type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus
                    </button>
                </form>';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create()
    // : View
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Kategori',
            'list' => ['Home', 'Kategori', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah Kategori Baru'
        ];

        $activeMenu = 'kategori';

        return view('kategori.create', [
            'breadcrumb' => $breadcrumb, 
            'page' => $page, 
            'activeMenu' => $activeMenu
        ]);
        // return  view('kategorilama.create');
    }
    public function store(Request $request)
    // : RedirectResponse
    {
        $request->validate([
            'kategori_kode' => 'required|string|min:3|unique:m_kategori,kategori_kode',
            'kategori_nama' => 'required|string|max:50'
        ]);

        KategoriModel::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
            'created_at' => now()
        ]);

        return redirect('/kategori')->with('success', 'Data kategori berhasil ditambah');
        // $validated = $request->validate([
        //     'kategori_kode' => 'bail|required',
        //     'kategori_nama' => 'required',
        // ]); 
        // // Retrieve the validated input data...
        // $validated = $request->validate();

        // // Retrieve a portion of the validated input data...
        // $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);

        // KategoriModel::create([
        //     'kategori_kode' => $validated['kategori_kode'],
        //     'kategori_nama' => $validated['kategori_nama'],
        // ]);
        // return redirect('/kategori');
    }
    public function show(string $id)
    {
        $breadcrumb = (object) [
            'title' => 'Detail Kategori',
            'list' => ['Home', 'Kategori', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail Kategori'
        ];

        $activeMenu = 'kategori';
        $kategori = KategoriModel::find($id);

        return view('kategori.show', [
            'breadcrumb' => $breadcrumb, 
            'page' => $page, 
            'kategori' => $kategori,
            'activeMenu' => $activeMenu
        ]);
    }
    public function edit($id) {
        $breadcrumb = (object) [
            'title' => 'Edit Kategori',
            'list' => ['Home', 'Kategori', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit Kategori'
        ];

        $activeMenu = 'kategori';
        $kategori = KategoriModel::find($id);

        return view('kategori.edit', [
            'breadcrumb' => $breadcrumb, 
            'page' => $page, 
            'kategori' => $kategori,
            'activeMenu' => $activeMenu
        ]);
        // $kategori = KategoriModel::findOrFail($id);
        // return view('kategorilama.edit', compact('kategorilama'));
    }
    public function update($id, Request $request) {
        $request->validate([
            'kategori_kode' => 'required|string|min:3|unique:m_kategori,kategori_kode',
            'kategori_nama' => 'required|string|max:50'
        ]);

        KategoriModel::find($id)->update([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
            'updated_at' => now()
        ]);

        return redirect('/kategori')->with('success', 'Data kategori berhasil diubah');
        // $kategori = KategoriModel::findOrFail($id);

        // $kategori->kategori_kode = $request->kodeKategori;
        // $kategori->kategori_nama = $request->namaKategori;

        // $kategori->save();
        // $kategori->update([
        //     'kategori_kode' => $request->kodeKategori,
        //     'kategori_nama' => $request->namaKategori
        // ]);
        // return redirect('/kategori');
    }
    public function destroy($id) {
        $kategori = KategoriModel::find($id);

        if (!$kategori) {
            return redirect('/kategori')->with('error', 'Data kategori tidak ditemukan');
        }
        
        try {
            KategoriModel::destroy($id);

            return redirect('/kategori')->with('success', 'Data kategori berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/kategori')->with('error', 'Data kategori gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
        // $kategori = KategoriModel::findOrFail($id);
        // $kategori->delete();

        // return redirect('/kategori');
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
