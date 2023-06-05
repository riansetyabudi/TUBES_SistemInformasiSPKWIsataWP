@extends('layouts.master')
@section('sub-title','Data Normalisasi')
@section('content')

  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
  @endif
  <h4 class="m-0">Tabel Normalisasi</h4>
  <a href="{{ route('normalisasi.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Data</a>
  <br><br>

  <table class="table table-striped table-hover table-sm table-bordered" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Wisata</th>
                <th scope="col">Nama Kriteria</th>
                <th scope="col">Nilai Normalisasi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($normalisasi as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>
                    @if ($item->RAlternatif)
                        {{ $item->RAlternatif->nama_wisata }}
                    @endif
                </td>
                <td>
                    @if ($item->RBobotKriteria)
                        {{ $item->RBobotKriteria->nama_kriteria }}
                    @endif
                </td>
                <td>{{ $item->nilai_normalisasi }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/normalisasi/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <form action="{{ route('normalisasi.destroy', $item->id ) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection