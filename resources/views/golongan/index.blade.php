@extends('layouts.app')
@section('content')

<h2>Golongan</h2>

<a href="{{ url('golongan/create') }}" class="btn btn-primary mb-3 float-end"><i class="fa-solid fa-plus"></i> Add Golongan</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>KODE GOLONGAN</th>
        <th>NAMA GOLONGAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @php
        $counter = 1; // Inisialisasi variabel counter
    @endphp

    @foreach ($rows as $row)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a href="{{ url('golongan/edit/' . $row->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> 
                Edit</a></td>
            <td>
                <form action="{{ url('golongan/' . $row->id) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE"> 
                    @csrf
                    <button type="submit" value="Delete" class="btn btn-danger"  onclick="return confirm('Are you sure?')"> 
                        <i class="fa-solid fa-delete-left"></i> Delete
                    </button>
                    
                </form>
            </td>
        </tr>
    @endforeach
</table>


@endsection