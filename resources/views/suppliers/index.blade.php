@extends('layouts.app')

@section('title', 'Home Supplier') 

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Supplier</h1>
        <a href="{{ route('suppliers.create') }}" class="btn btn-success">Add</a>
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
                <th>Nama Supplier</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if ($supplier->count() > 0)
                @foreach ($supplier as $sup)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $sup->nama_supplier }}</td>
                        <td class="align-middle">{{ $sup->no_telp }}</td>
                        <td class="align-middle">{{ $sup->alamat }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('suppliers.show', $sup->id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('suppliers.edit', $sup->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('suppliers.destroy', $sup->id) }}" method="POST" type="button"
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
                    <td class="text-center" colspan="5">Supplier not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
