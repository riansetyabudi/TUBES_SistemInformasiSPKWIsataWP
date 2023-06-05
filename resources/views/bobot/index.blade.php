@extends('layouts.master')
@section('sub-title','Data Bobot Kriteria')
@section('content')

  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
  @endif
  <h4 class="m-0">Tabel Bobot Kriteria</h4>
  <a href="{{ route('bobot.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Data</a> 
  <br><br>

  <table class="table table-striped table-hover table-sm table-bordered" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kriteria</th>
                <th scope="col">Bobot</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bobot as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_kriteria }}</td>
                <td>{{ $item->bobot }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/bobot/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <form action="{{ route('bobot.destroy', $item->id ) }}" method="POST">
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