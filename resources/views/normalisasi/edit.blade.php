@extends('layouts.master')
@section('sub-title','Edit Normalisasi')
@section('content')

        @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @endif

        <form action="{{ route('normalisasi.update' ,$normalisasi->id ) }}" method="POST" class="">
            @csrf
            @method('PUT')
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
            {{-- <div class="mb-3">
                <label for="jumlah_pengunjung" class="form-label">Jumlah Pengunjung</label>
                <input type="text" class="form-control" id="jumlah_pengunjung" name="jumlah_pengunjung" value="{{$normalisasi->jumlah_pengunjung}}">
            </div>
            <div class="mb-3">
                <label for="fasiltas" class="form-label">Fasilitas</label>
                <input type="text" class="form-control" id="fasilitas" name="fasilitas" value ="{{$normalisasi->fasilitas}}">
            </div>
            <div class="mb-3">
                <label for="harga_tiket_masuk" class="form-label">Harga Tiket Masuk</label>
                <input type="text" class="form-control" id="harga_tiket_masuk" name="harga_tiket_masuk" value="{{$normalisasi->harga_tiket_masuk}}">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" value="{{$normalisasi->rating}}">
            </div> --}}
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection