<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        // // tambah data user dengan Eloquent Model
        // $data = [
        //     'level_id' => 2, 
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3', 
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user

        // RETRIEVING SINGLE MODELS
        // $user = UserModel::find(1); // ambil satu data dari tabel m_user
        // $user = UserModel::where('level_id', 1)->first(); // ambil satu data dari tabel m_user
        // $user = UserModel::firstWhere('level_id', 1); // ambil satu data dari tabel m_user
        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // }); // ambil satu data dari tabel m_user

        // Not Found Exceptions
        // $user = UserModel::findOrFail(1);
        // $user = UserModel::where('username', 'manager9')->firstOrFail();

        // Retrieving Aggregrates
        // $user = UserModel::where('level_id', 2)->count();

        // Retreiving or Creating Models
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua', 
        //         'password' => Hash::make('12345'), 
        //         'level_id' => 2
        //     ]
        // );
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33', 
                'nama' => 'Manager Tiga Tiga', 
                'password' => Hash::make('12345'),
                'level_id' => 2
            ]
        );
        $user->save();
        return view('user', ['data' => $user]);
        
        // UserModel::insert($data); // tambahkan data ke tabel m_user
        // UserModel::where('username', 'customer-1')->update($data); // update data user

    }
    // public function profile($id, $name) {
    //     return view('user', ['id' => $id])
    //     -> with('name', $name);
    // }
}
