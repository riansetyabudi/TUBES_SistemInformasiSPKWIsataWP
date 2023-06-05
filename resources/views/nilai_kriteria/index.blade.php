@extends('layouts.master')
@section('sub-title','Data Nilai Kriteria')
@section('content')

  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
  @endif
  <h4 class="m-0">Tabel Nilai Kriteria</h4>
  <a href="{{ route('nilai_kriteria.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Data</a>
  <br><br>

  <table class="table table-striped table-hover table-sm table-bordered" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kriteria</th>
                <th scope="col">Nilai</th>
                <th scope="col">Normalisasi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai_kriteria as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->RBobotKriteria->nama_kriteria }}</td>
                <td>{{ $item->nilai }}</td>
                <td>{{ $item->normalisasi }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/nilai_kriteria/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <form action="{{ route('nilai_kriteria.destroy', $item->id ) }}" method="POST">
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