@extends('layout.main')

@section('title', 'Student')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <a href="/student/create" class="btn btn-primary my-3">Add</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group">
                @foreach ($student as $std)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $std->nama }}
                    <a href="/student/{{ $std->id }}"><button type="button" class="btn btn-success">detail</button></a>
                @endforeach
                </li>
            </ul>

            {{-- <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $std)
                        <tr>
                            <td scope="row">{{ $std->id }}</td>
                            <td>{{ $std->nama }}</td>
                            <td>{{ $std->nrp }}</td>
                            <td>{{ $std->email }}</td>
                            <td> --}}
                                {{-- <a href="" class="badge badge-success">edit</a> --}}
                                {{-- <button type="button" class="btn btn-success">Edit</button> --}}
                                {{-- <a href="" class="badge badge-danger">delete</a> --}}
                                {{-- <button type="button" class="btn btn-danger">Delete</button> --}}
                            {{-- </td>
                        </tr>
                    @endforeach
                </tbody> --}}
            {{-- </table> --}}
        </div>
    </div>
</div>
@endsection