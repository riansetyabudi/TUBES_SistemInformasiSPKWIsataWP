@extends('template.home')
@section('title', 'EDIT-PENGIRIMAN')
@section('sub-title','Edit Pengiriman')
@section('content')

        <form action="/pengiriman/update/{{$pengiriman->id}}" method="POST" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_rute" class="form-label">Rute</label>
                <select class="form-control select2" style="width: 100%;" name="id_rute" id="id_rute"value="{{$pengiriman->id_rute}}">
                    <option disabled value>Pilih Rute</option>
                    @foreach ($rute_ as $item)
                        <option value="{{ $item->id }}">{{ $item->kota_tujuan }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_outlet" class="form-label">Outlet</label>
                <select class="form-control select2" style="width: 100%;" name="id_outlet" id="id_outlet" value="{{$pengiriman->id_outlet}}">
                    <option disabled value>Pilih Outlet</option>
                    @foreach ($outlet_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_outlet }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_truk" class="form-label">Truk</label>
                <select class="form-control select2" style="width: 100%;" name="id_truk" id="id_truk" value="{{$pengiriman->id_truk}}">
                    <option disabled value>Pilih Truk</option>
                    @foreach ($truk_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nomor_polisi }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_supir" class="form-label">Supir</label>
                <select class="form-control select2" style="width: 100%;" name="id_supir" id="id_supir" value="{{$pengiriman->id_supir}}">
                    <option disabled value>Pilih Supir</option>
                    @foreach ($supir_ as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_supir }}></option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_pengiriman" class="form-label">Tanggal Pengiriman</label>
                <div class="input-group">
                  <input type="date" class="form-control" id="tanggal_pengiriman" name="tanggal_pengiriman" placeholder="Masukan Tanggal Pengiriman"value="{{$pengiriman->tanggal_pengiriman}}">
                  <span class="input-group-text" id="tanggal_pengiriman-addon"><i class="bi bi-calendar"></i></span>
                </div>
            </div>
            <div class="form-group">
                <label for="status_pengiriman" class="form-label">Status Pengiriman</label>
                <input type="text" class="form-control" id="status_pengiriman" name="status_pengiriman" placeholder="Masukan Status Pengiriman" value="{{$pengiriman->status_pengiriman}}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            <a href="{{ route('pengiriman.index') }}" class="btn btn-secondary btn-block">Batal</a>
        </form>
    </div>
@endsection

@section('scripts')
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

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection