<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LibraryController extends Controller
{
    public function index_admin () {
        $siswas = Siswa::all();
        return view('index_admin', compact("siswas"));
    }

    public function index_siswa () {
        $siswas = Siswa::all();
        return view('index_siswa', compact("siswas"));
    }

    public function buku() {
        $bukus = buku::all();
        return view('panel_buku_admin', compact("bukus"));
    }

    public function login () {
        return view('login');
    }

    public function register () {
        return view('partials/register/footer');
    }

    public function profil () {
        // $user_nama = Auth::siswa();
        // dd($user_nama);
        return view('profil');
    }

    public function delete_buku($id) {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('dashboard_admin')->with('success', 'Buku berhasil dihapus');
    }

    public function create_buku(Request $request) {
        $datas = $request->validate([
            'judul' => 'required|string',
            'penerbit' => 'required|string',
            'pengarang' => 'required|string',
            'stok_buku' => 'required|integer',
        ]);

        Buku::create($datas);
        return redirect()->route('dashboard_admin')->with('success', 'Buku berhasil ditambahkan');
    }

    public function edit_buku(Request $request, $id) {
        $datas = $request->validate([
            'judul' => 'required|string',
            'penerbit' => 'required|string',
            'pengarang' => 'required|string',
            'stok_buku' => 'required|integer',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($datas);
        return redirect()->route('dashboard_admin')->with('success', 'Buku berhasil diedit');
    }

    public function create_siswa(Request $request) {
        $siswas = $request->validate([
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $siswas['password'] = Hash::make($request->password);

        Siswa::create($siswas);
        return redirect()->route('dashboard_admin')->with('success', 'Siswa berhasil ditambahkan');
    }

    public function delete_siswa($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()->route('dashboard_admin')->with('success', 'Siswa deleted successfully');
    }
}
