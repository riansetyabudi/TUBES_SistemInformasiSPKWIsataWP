@extends('layouts.master')
@section('content')

        <form action="/nilai_kriteria" method="POST" class="">
            @csrf
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
                <label for="nilai" class="form-label">Nilai</label>
                <input type="text" class="form-control" id="nilai" name="nilai" placeholder="Masukan Nilai">
            </div>
            <div class="mb-3">
                <label for="normalisasi" class="form-label">Normalisasi</label>
                <input type="text" class="form-control" id="normalisasi" name="normalisasi" placeholder="Masukan Nilai Normalisasi">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('nilai_kriteria.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection