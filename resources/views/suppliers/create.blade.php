@extends('layouts.app')

@section('title', 'Create Supplier')

@section('contents')
    <h1 class="mb-0">Add Supplier</h1>
    <hr />
    <form action="{{ route('suppliers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_supplier" class="form-control" placeholder="Nama Supplier">
            </div>
            <div class="col">
                <input type="text" name="no_telp" class="form-control" placeholder="No Telp">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection