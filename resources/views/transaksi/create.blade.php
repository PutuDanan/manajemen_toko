@extends('layouts.app')

@section('title', 'Create Transaksi')

@section('contents')
    <h1 class="mb-0">Add Transaksi</h1>
    <hr />
    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama barang">
            </div>
            <div class="col">
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="total_harga" class="form-control" placeholder="Total Harga">
            </div>
            <div class="col">
                <input type="text" name="petugas" class="form-control" placeholder="Petugas">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection