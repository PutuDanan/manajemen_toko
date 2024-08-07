@extends('layouts.app')

@section('title', 'Edit Supplier')

@section('contents')
    <h1 class="mb-0">Edit Supplier</h1>
    <hr />
    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Supplier</label>
                <input type="text" name="nama_supplier" class="form-control" placeholder="Nama Supplier" value="{{ $supplier->nama_supplier }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">No Telp</label>
                <input type="text" name="no_telp" class="form-control" placeholder="No Telp" value="{{ $supplier->no_telp }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Alamat">{{ $supplier->alamat }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection