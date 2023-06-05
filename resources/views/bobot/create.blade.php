@extends('layouts.master')
@section('content')

        <form action="/bobot" method="POST" class="">
            @csrf
            <div class="mb-3">
                <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" placeholder="Masukan Kriteria">
            </div>
            <div class="mb-3">
                <label for="bobot" class="form-label">Bobot</label>
                <input type="text" class="form-control" id="bobot" name="bobot" placeholder="Masukan Bobot">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            <a href="{{ route('bobot.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

@endsection