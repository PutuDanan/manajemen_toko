@extends('layouts.app')

@section('title', 'Home Kategori') 

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Kategori</h1>
        <a href="{{ route('kategoris.create') }}" class="btn btn-success">Add</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Kategori</th>
                <th>Kode Kategori</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if ($kategori->count() > 0)
                @foreach ($kategori as $kat)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $kat->nama_kategori }}</td>
                        <td class="align-middle">{{ $kat->kode_kategori }}</td>
                        <td class="align-middle">{{ $kat->deskripsi }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kategoris.show', $kat->id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('kategoris.edit', $kat->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('kategoris.destroy', $kat->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Kategori not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
