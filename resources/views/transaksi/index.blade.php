@extends('layouts.app')

@section('title', 'Home Transaksi') 

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Transaksi</h1>
        <a href="{{ route('transaksi.create') }}" class="btn btn-success">Add</a>
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
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Petugas</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if ($transaksi->count() > 0)
                @foreach ($transaksi as $tr)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $tr->nama_barang }}</td>
                        <td class="align-middle">{{ $tr->jumlah }}</td>
                        <td class="align-middle">{{ $tr->total_harga }}</td>
                        <td class="align-middle">{{ $tr->petugas }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('transaksi.show', $tr->id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('transaksi.edit', $tr->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('transaksi.destroy', $tr->id) }}" method="POST" type="button"
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
                    <td class="text-center" colspan="5">Transaksi not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
