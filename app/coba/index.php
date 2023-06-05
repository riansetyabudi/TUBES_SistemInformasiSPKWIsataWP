@extends('template.home')
@section('title', 'DAFTAR-PENGIRIMAN')
@section('sub-title','Daftar Pengiriman')

@section('content')

        <div class="btn-group mb-3" role="group" aria-label="Basic Example">
            <a href="{{ route('pengiriman.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Pengiriman</a>
            <a href="{{ route('pengiriman.pdf') }}" class="btn btn-danger btn-sm"><i class="fas fa-print"></i> Export Ke PDF</a>
        </div>

        <table class="table table-striped table-hover table-sm table-bordered" id="example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kota Tujuan</th>
                    <th>Outlet</th>
                    <th>Truk</th>
                    <th>Supir</th>
                    <th>Tanggal Pengiriman</th>
                    <th>Status Pengiriman</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengiriman as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->RRute->kota_tujuan }}</td>
                    <td>{{ $item->ROutlet->nama_outlet }}</td>
                    <td>{{ $item->RTruk->nomor_polisi }}</td>
                    <td>{{ $item->RSupir->nama_supir }}</td>
                    <td>{{ $item->tanggal_pengiriman }}</td>
                    <td>{{ $item->status_pengiriman }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/pengiriman/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                        <a class="btn btn-danger btn-sm" href="/pengiriman/delete/{{$item->id}}" onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection