@extends('layouts.master')
@section('sub-title','Data Alternatif Wisata')
@section('content')

  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
  @endif
  <h4 class="m-0">Tabel Alternatif Wisata</h4>
   <a href="{{ route('alternatif.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Data</a> 
  <br><br>

  <table class="table table-striped table-hover table-sm table-bordered" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Wisata</th>
                <th scope="col">Alamat Wisata</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga Tiket</th>
                <th scope="col">Rating</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alternatif as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_wisata }}</td>
                <td>{{ $item->alamat_wisata }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->harga_tiket_masuk }}</td>
                <td>{{ $item->rating }}</td>
                <td>
                     <a class="btn btn-primary btn-sm" href="/alternatif/edit/{{$item->id}}"><i class="fas fa-edit"></i> Edit</a>
                    <form action="{{ route('alternatif.destroy', $item->id ) }}" method="POST">
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