@extends('layouts.master')
@section('sub-title','Edit User')
@section('content')

  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}
    </div>
  @endif

  <form action="{{ route('users.update', $user->id) }}" method="POST" class="">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Leave blank to keep current password">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
  </form>

@endsection
