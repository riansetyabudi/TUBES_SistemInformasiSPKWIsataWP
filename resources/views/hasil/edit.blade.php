@extends('layouts.master')
@section('sub-title','Edit Hasil')
@section('content')

        @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @endif

        <form action="{{ route('barang.update' ,$barang->id ) }}" method="POST" class="">
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
                <label for="id_alternatif" class="form-label">Alamat Wisata</label>
                <select class="form-control select2" style="width: 100%;" name="id_alternatif" id="id_alternatif">
                    <option disabled value>Pilih Alamat Wisata</option>
                    @foreach ($alternatif_ as $item)
                        <option value="{{ $item->id }}">{{ $item->alamat_wisata }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_alternatif" class="form-label">Kategori</label>
                <select class="form-control select2" style="width: 100%;" name="id_alternatif" id="id_alternatif">
                    <option disabled value>Pilih Kategori</option>
                    @foreach ($alternatif_ as $item)
                        <option value="{{ $item->id }}">{{ $item->kategori }}></option>
                    @endforeach
                </select>
            </div> 
            <div class="form-group">
                <label for="id_alternatif" class="form-label">Harga Tiket Masuk</label>
                <select class="form-control select2" style="width: 100%;" name="id_alternatif" id="id_alternatif">
                    <option disabled value>Pilih Harga</option>
                    @foreach ($alternatif_ as $item)
                        <option value="{{ $item->id }}">{{ $item->harga_tiket_masuk }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_alternatif" class="form-label">Rating</label>
                <select class="form-control select2" style="width: 100%;" name="id_alternatif" id="id_alternatif">
                    <option disabled value>Pilih Rating</option>
                    @foreach ($alternatif_ as $item)
                        <option value="{{ $item->id }}">{{ $item->rating }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fasilitas" class="form-label">Fasilitas</label>
                <input type="text" class="form-control" id="fasilitas" name="fasilitas" value="{{$hasil->fasilitas}}">
            </div>
            <div class="mb-3">
                <label for="nilai_preferensi" class="form-label">Nilai Preferensi</label>
                <input type="text" class="form-control" id="nilai_preferensi" name="nilai_preferensi" value="{{$hasil->nilai_preferensi}}">
            </div>
            <div class="mb-3">
                <label for="peringkat" class="form-label">Peringkat</label>
                <input type="text" class="form-control" id="peringkat" name="peringkat" value="{{$hasil->peringkat}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>

@endsection