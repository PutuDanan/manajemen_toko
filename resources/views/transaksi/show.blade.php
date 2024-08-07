@extends('layouts.app')

@section('title', 'Show Transaksi')

@section('contents')
    <h1 class="mb-0">Detail Transaksi</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{ $transaksi->nama_barang }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jumlah</label>
            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" value="{{ $transaksi->jumlah }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Total Harga</label>
            <input type="text" name="total_harga" class="form-control" placeholder="Total Harga" value="{{ $transaksi->total_harga }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Petugas</label>
            <input type="text" name="petugas" class="form-control" placeholder="Petugas" value="{{ $transaksi->petugas }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $transaksi->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $transaksi->updated_at }}" readonly>
        </div>
    </div>
@endsection