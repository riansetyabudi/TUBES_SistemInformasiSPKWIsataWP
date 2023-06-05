@extends('layouts.master')
@section('content')

        <form action="/normalisasi" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="id_alternatif" class="form-label">Nama Wisata</label>
                <select class="form-control select2" style="width: 100%;" name="id_alternatif" id="id_alternatif">
                    <option disabled value>Pilih Nama Wisata</option>
                    @foreach ($alternatif_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_wisata }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_kriteria" class="form-label">Nama Kriteria</label>
                <select class="form-control select2" style="width: 100%;" name="id_kriteria" id="id_kriteria">
                    <option disabled value>Pilih Nama Kriteria</option>
                    @foreach ($bobotkriteria_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kriteria }}></option>
                    @endforeach
                </select>
            </div>
             <div class="mb-3">
                <label for="nilai_normalisasi" class="form-label">Nilai Normalisasi</label>
                <input type="text" class="form-control" id="nilai_normalisasi" name="nilai_normalisasi" placeholder="Masukan Nilai Normalisasi">
            </div> 
            {{--<div class="mb-3">
                <label for="jumlah_pengunjung" class="form-label">Jumlah Pengunjung</label>
                <input type="text" class="form-control" id="jumlah_pengunjung" name="jumlah_pengunjung" placeholder="Masukan Jumlah Pengunjung">
            </div>
            <div class="mb-3">
                <label for="fasilitas" class="form-label">Fasilitas</label>
                <input type="text" class="form-control" id="fasilitas" name="fasilitas" placeholder="Masukan Fasilitas">
            </div>
            <div class="mb-3">
                <label for="harga_tiket_masuk" class="form-label">Harga Tiket Masuk</label>
                <input type="text" class="form-control" id="harga_tiket_masuk" name="harga_tiket_masuk" placeholder="Harga Tiket Masuk">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating Wisata">
            </div> --}}
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('normalisasi.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection