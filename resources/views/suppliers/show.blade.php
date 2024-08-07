@extends('layouts.app')

@section('title', 'Show Supplier')

@section('contents')
    <h1 class="mb-0">Detail Supplier</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Supplier</label>
            <input type="text" name="nama_supplier" class="form-control" placeholder="Nama Supplier" value="{{ $supplier->nama_supplier }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">No Telp</label>
            <input type="text" name="no_telp" class="form-control" placeholder="No Telp" value="{{ $supplier->no_telp }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Alamat" readonly>{{ $supplier->alamat }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $supplier->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $supplier->updated_at }}" readonly>
        </div>
    </div>
@endsection