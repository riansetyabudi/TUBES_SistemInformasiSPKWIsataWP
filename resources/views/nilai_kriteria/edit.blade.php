@extends('layouts.master')
@section('sub-title','Edit Nilai Kriteria')
@section('content')

        @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @endif

        <form action="{{ route('nilai_kriteria.update' ,$nilai_kriteria->id ) }}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_kriteria" class="form-label">Nama Kriteria</label>
                <select class="form-control select2" style="width: 100%;" name="id_kriteria" id="id_kriteria">
                    <option disabled value>Pilih Kriteia</option>
                    @foreach ($bobotkriteria_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kriteria }}></option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="text" class="form-control" id="nilai" name="nilai" value="{{$nilai_kriteria->nilai}}">
            </div>
            <div class="mb-3">
                <label for="normalisasi" class="form-label">Normalisasi</label>
                <input type="text" class="form-control" id="normalisasi" name="normalisasi" value="{{$nilai_kriteria->normalisasi}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>
@endsection