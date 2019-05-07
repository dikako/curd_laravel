@extends('layouts.master')
@section('content')

    @if(session('Berhasil'))
    <div class="alert alert-success" role="alert">
    {{session('Berhasil')}}
    </div>
    @endif
        <div class="row">
            <div class="col-6"><h2>Daftar menu</h2></div>
            <div class="col-6">
                <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                Tambah Menu
                </button>
            </div>
        <table class="table table-hover">
            <tr>
                <th>Menu</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            @foreach($daftar_menu as $menu)
            <tr>
                <td>{{$menu->nama_menu}}</td>
                <td>{{$menu->harga}}</td>
                <td>
                    <a href="/menu/{{$menu->id}}/ubah">
                        <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                    </a>
                    <a href="/menu/{{$menu->id}}/hapus">
                        <button type="button" class="btn btn-danger btn-sm"  onClick="return confirm('Yakin Mau Menghapus Menu Ini ?')">Hapus</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/menu/tambah" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="menu">Nama Menu</label>
                            <input name="nama_menu" type="text " class="form-control" id="menu" aria-describedby="emailHelp" placeholder="Masukan Menu Baru Anda">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input name="harga" type="text" class="form-control" id="harga" placeholder="Masukan Harga Menu Anda">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Menu</button>
                    </div>
                        </form>
                    </div>
                </div>
        </div>
@endsection 

