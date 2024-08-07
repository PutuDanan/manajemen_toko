@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('contents')
    <h1 class="mb-0">Edit Kategori</h1>
    <hr />
    <form action="{{ route('kategoris.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="Kategori" value="{{ $kategori->nama_kategori }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Kode Kategori</label>
                <input type="text" name="kode_kategori" class="form-control" placeholder="Kode Kategori" value="{{ $kategori->kode_kategori }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi">{{ $kategori->deskripsi }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection