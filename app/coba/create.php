@extends('template.home')
@section('title', 'TAMBAH-PENGIRIMAN')
@section('sub-title','Tambah Pengiriman')
@section('content')

        @if (count($errors)>0)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
            @endforeach
        @endif

        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
        {{ Session('success') }}
        </div>
        @endif


        <form action="/pengiriman" method="POST" class="">
            @csrf
            <div class="form-group">
                <label for="id_rute" class="form-label">Rute</label>
                <select class="form-control select2" style="width: 100%;" name="id_rute" id="id_rute">
                    <option disabled value>Pilih Rute</option>
                    @foreach ($rute_ as $item)
                        <option value="{{ $item->id }}">{{ $item->kota_tujuan }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_outlet" class="form-label">Outlet</label>
                <select class="form-control select2" style="width: 100%;" name="id_outlet" id="id_outlet">
                    <option disabled value>Pilih Outlet</option>
                    @foreach ($outlet_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_outlet }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_truk" class="form-label">Truk</label>
                <select class="form-control select2" style="width: 100%;" name="id_truk" id="id_truk">
                    <option disabled value>Pilih Truk</option>
                    @foreach ($truk_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nomor_polisi }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_supir" class="form-label">Supir</label>
                <select class="form-control select2" style="width: 100%;" name="id_supir" id="id_supir">
                    <option disabled value>Pilih Supir</option>
                    @foreach ($supir_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_supir }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pengiriman" class="form-label">Tanggal Pengiriman</label>
                <input type="date" class="form-control" id="tanggal_pengiriman" name="tanggal_pengiriman" >
            </div>
            <div class="form-group">
                <label for="status_pengiriman" class="form-label">Status Pengiriman</label>
                <input type="text" class="form-control" id="status_pengiriman" name="status_pengiriman" placeholder="Masukan Status Pengiriman">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('pengiriman.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#tanggal_pengiriman').datepicker({
          format: 'yyyy-mm-dd',
          autoclose: true
        });
      });
    </script>
@endsection