<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $daftar_menu = \App\Menu::all();
            return view('menu.index', ['daftar_menu' => $daftar_menu]);
        }
    public function tambah(Request $request)
    {
        \App\Menu::create($request->all());
        return redirect('/menu')->with('Berhasil','Menu Baru Berhasil Dimasukan');
    }
    public function ubah($id)
    {
        $ubah_menu = \App\Menu::find($id);
        return view('menu/ubah',['menu' => $ubah_menu]);
    }
    public function ubah_menu(Request $request, $id)
    {
        $menu = \App\Menu::find($id);
        $menu->update($request->all());
        return redirect('/menu')->with('Berhasil','Menu Berhasil Diubah');
    }
    public function hapus($id)
    {
        $menu = \App\Menu::find($id);
        $menu->delete($menu);
        return redirect('/menu')->with('Berhasil','Menu Berhasil Dihapus');
    }
    public function dashboard()
    {
        return view('/menu/dashboard');
    }
    public function user()
    {
        $user = \App\user::all();
        return view('menu/user', ['user' => $user]);
    }
    public function tambah_user(Request $request)
    {
        \App\user::create($request->all());
        return redirect('/menu/user')->with('Berhasil','Menu Baru Berhasil Dimasukan');
    }
}
