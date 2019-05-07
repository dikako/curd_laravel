@extends('layouts.master')
@section('content')

<div class="row">
            <div class="col-6"><h2>Daftar User</h2></div>
            <div class="col-6">
                <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                Tambah User
                </button>
            </div>
        <table class="table table-hover">
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Akses</th>

            </tr>
            @foreach($user as $user)
            <tr>
                <td>{{$user->nama}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->akses}}</td>

                <td>
                    <a href="/menu/user{{$user->id}}/ubah">
                        <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                    </a>
                    <a href="/menu/user{{$user->id}}/hapus">
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
                    <form action="/menu/user/tambah_user" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text " class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Menu Baru Anda">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text " class="form-control" id="username" aria-describedby="emailHelp" placeholder="Masukan Menu Baru Anda">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukan Menu Baru Anda">
                        </div>
                        <div class="form-group">
                            <label for="akses">Akses</label>
                            <input name="akses" type="text " class="form-control" id="akses" aria-describedby="emailHelp" placeholder="Masukan Menu Baru Anda">
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