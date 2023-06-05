@extends('layouts.master')
@section('sub-title','Data users')
@section('content')

  @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
  @endif
  <h4 class="m-0">Tabel Bobot Kriteria</h4>
  <a href="{{ route('users.create') }}" class="btn btn-info btn-sm"><i class="fas fa-copy"></i> Tambah Data</a> 
  <br><br>

  <table class="table table-striped table-hover table-sm table-bordered" id="example1">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}"><i class="fas fa-edit"></i> Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are You Sure')"><i class="fas fa-trash"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
