@extends('layouts.master')
@section('sub-title','Data Perangkingan')
@section('content')

  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
  @endif
  <h4 class="m-0">Tabel Perangkingan</h4>
  <a href="{{ route('perangkingan.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Data</a>
  <br><br>

  <table class="table table-striped table-hover table-sm table-bordered" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Wisata</th>
                <th scope="col">Nilai Preferensi</th>
                <th scope="col">Peringkat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perangkingan as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>
                    @if ($item->RAlternatif)
                        {{ $item->RAlternatif->nama_wisata }}
                    @endif
                </td>
                <td>{{ $item->nilai_preferensi }}</td>
                <td>{{ $item->peringkat }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/perangkingan/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <form action="{{ route('perangkingan.destroy', $item->id ) }}" method="POST">
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