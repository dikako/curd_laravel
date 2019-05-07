@extends('layouts.master')
@section('content')

        <h2>Ubah Menu</h2>
        
            @if(session('Berhasil'))
            <div class="alert alert-success" role="alert">
            {{session('Berhasil')}}
        </div>
            @endif
        <div class="row">
        <div class="col-lg-12">
            <form action="/menu/{{$menu->id}}/ubah_menu" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="menu">Nama Menu</label>
                                <input name="nama_menu"  value="{{$menu->nama_menu}}" type="text " class="form-control" id="menu" aria-describedby="emailHelp" placeholder="Masukan Menu Baru Anda">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input name="harga" value="{{$menu->harga}}" type="text" class="form-control" id="harga" placeholder="Masukan Harga Menu Anda">
                            </div>
                            <div class="modal-footer">
                            <a href="#">
                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                            </a>
                            <a href="/menu">
                                <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Batal</button>
                            </a>
                            <button type="submit" class="btn btn-warning btn-sm">Ubah Menu</button>
                    </div>
            </form>
            </div>
@endsection 

    
    
