@extends('layouts.app')

@section('title', 'Show Kategori')

@section('contents')
    <h1 class="mb-0">Detail Kategori</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" placeholder="Kategori" value="{{ $kategori->nama_kategori }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Kategori</label>
            <input type="text" name="kode_kategori" class="form-control" placeholder="Kode Kategori" value="{{ $kategori->kode_kategori }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" readonly>{{ $kategori->deskripsi }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $kategori->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $kategori->updated_at }}" readonly>
        </div>
    </div>
@endsection