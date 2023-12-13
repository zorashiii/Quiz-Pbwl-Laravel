@extends('layouts.app')

@section('content')
<h2>Add Users</h2>

<form action="{{ url('users') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name">Nama:</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" required>
    </div>
    <div class="mb-3">
        <label for="email">Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Masukkan Email" required>
    </div>
    <div class="mb-3">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
    </div>
    <div class="mb-3">
        <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>


@endsection
