@extends('layouts.master')
@section('sub-title','Edit Alternatif')
@section('content')

        @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @endif

        <form action="{{ route('alternatif.update' ,$alternatif->id ) }}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_wisata" class="form-label">Nama Wisata</label>
                <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" value="{{$alternatif->nama_wisata}}">
            </div>
            <div class="mb-3">
                <label for="alamat_wisata" class="form-label">Alamat Wisata</label>
                <input type="text" class="form-control" id="alamat_wisata" name="alamat_wisata" value="{{$alternatif->alamat_wisata}}">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value ="{{$alternatif->kategori}}">
            </div>
            <div class="mb-3">
                <label for="harga_tiket_masuk" class="form-label">Harga Tiket Masuk</label>
                <input type="text" class="form-control" id="harga_tiket_masuk" name="harga_tiket_masuk" value="{{$alternatif->harga_tiket_masuk}}">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" value="{{$alternatif->rating}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection