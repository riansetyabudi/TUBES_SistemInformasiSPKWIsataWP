@extends('layouts.master')
@section('sub-title','Edit Bobot Kriteria')
@section('content')

        @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @endif

        <form action="{{ route('bobot.update' ,$bobot->id ) }}" method="POST" class="">
            @csrf
            @method('PUT')
            {{-- <div class="form-group">
                <label for="id_kategori_barang" class="form-label"></label>
                <select class="form-control select2" style="width: 100%;" name="id_kategori_barang" id="id_kategori_barang">
                    <option disabled value>Pilih Kategori Barang</option>
                    @foreach ($kategori_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori_barang }}></option>
                    @endforeach
                </select>
            </div> --}}
            {{-- <div class="form-group">
                <label for="id_gudang" class="form-label">Gudang Barang</label>
                <select class="form-control select2" style="width: 100%;" name="id_gudang" id="id_gudang">
                    <option disabled value>Pilih Gudang Barang</option>
                    @foreach ($gudang_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_gudang }}></option>
                    @endforeach
                </select>
            </div> --}}
            <div class="mb-3">
                <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="{{$bobot->nama_kriteria}}">
            </div>
            <div class="mb-3">
                <label for="bobot" class="form-label">Bobot</label>
                <input type="text" class="form-control" id="bobot" name="bobot" value="{{$bobot->bobot}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>
@endsection