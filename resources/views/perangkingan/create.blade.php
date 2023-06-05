@extends('layouts.master')
@section('content')

        <form action="/perangkingan" method="POST" class="">
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
            <div class="mb-3">
                <label for="nilai_preferensi" class="form-label">Nilai Preferensi</label>
                <input type="text" class="form-control" id="nilai_preferensi" name="nilai_preferensi" placeholder="Masukan Nilai Preferensi">
            </div>
            <div class="mb-3">
                <label for="peringkat" class="form-label">Peringkat</label>
                <input type="text" class="form-control" id="peringkat" name="peringkat" placeholder="Masukka Urutan Peringkat">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('perangkingan.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection