@extends('layout.main')

@section('title', 'Detail Student')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Mahasiswa</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $id->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $id->nrp }}</h6>
                    <p class="card-text">{{ $id->email }}</p>
                    {{-- <button type="submit" class="btn btn-primary">Edit</button> --}}
                    <a href="{{ $id->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{ $id->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/student" class="card-link">Back</a>
                </div>
            </div>

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