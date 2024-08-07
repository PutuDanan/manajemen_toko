@extends('layouts.app')

@section('title', 'Edit Transaksi')

@section('contents')
    <h1 class="mb-0">Edit Transaksi</h1>
    <hr />
    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{ $transaksi->nama_barang }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" value="{{ $transaksi->jumlah }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Total Harga</label>
                <input type="text" name="total_harga" class="form-control" placeholder="Total Harga" value="{{ $transaksi->total_harga }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Petugas</label>
                <input type="text" name="petugas" class="form-control" placeholder="Petugas" value="{{ $transaksi->petugas }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection