@extends('layouts.master')
@section('sub-title','Edit Penilaian Preferensi')
@section('content')

        @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @endif

        <form action="{{ route('penilaian_preferensi.update' ,$penilaian_preferensi->id ) }}" method="POST" class="">
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
            <div class="mb-3">
                <label for="nilai_preferensi" class="form-label">Nilai Preferensi</label>
                <input type="text" class="form-control" id="nilai_preferensi" name="nilai_preferensi" value="{{$penilaian_preferensi->nilai_preferensi}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>
@endsection