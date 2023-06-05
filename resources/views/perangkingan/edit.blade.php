@extends('layouts.master')
@section('sub-title','Edit Perangkingan')
@section('content')

        @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @endforeach
        @endif

        <form action="{{ route('perangkingan.update' ,$perangkingan->id ) }}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_alternatif" class="form-label">Nama Wisata</label>
                <select class="form-control select2" style="width: 100%;" name="id_alternatif" id="id_alternatif">
                    <option disabled value>Pilih Nama Wisata</option>
                    @foreach ($alternatif_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_wisata }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nilai_preferensi" class="form-label">Nilai Preferensi</label>
                <select class="form-control select2" style="width: 100%;" name="nilai_preferensi" id="nilai_preferensi">
                    <option disabled value>Pilih Hasil Nilai Preferensi</option>
                    @foreach ($penilaian_preferensi as $nilai)
                        <option value="{{ $nilai }}" {{ $perangkingan->nilai_preferensi == $nilai ? 'selected' : '' }}>{{ $nilai }}</option>
                    @endforeach
                </select>
            </div>                                    
            <div class="mb-3">
                <label for="peringkat" class="form-label">Peringkat</label>
                <input type="text" class="form-control" id="peringkat" name="peringkat" value="{{$perangkingan->peringkat}}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
        </form>
@endsection
