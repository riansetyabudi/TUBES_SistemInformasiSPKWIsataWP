@extends('layouts.master')
@section('content')

        <form action="/alternatif" method="POST" class="">
            @csrf
            <div class="mb-3">
                <label for="nama_wisata" class="form-label">Nama Wisata</label>
                <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" placeholder="Masukan Nama Wisata">
            </div>
            <div class="mb-3">
                <label for="alamat_wisata" class="form-label">Alamat Wisata</label>
                <input type="text" class="form-control" id="alamat_wisata" name="alamat_wisata" placeholder="Masukan Alamat Wisata">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukan Kategori">
            </div>
            <div class="mb-3">
                <label for="harga_tiket_masuk" class="form-label">Harga Tiket Masuk</label>
                <input type="text" class="form-control" id="harga_tiket_masuk" name="harga_tiket_masuk" placeholder="Harga Tiket Masuk">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating Wisata">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('alternatif.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection