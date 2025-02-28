@extends('layouts.app')

@section('title', 'Profile')

@section('contents')
    <h1 class="mb-0">Profile</h1>
    <hr />

    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="">
        <div class="row">
            <div class="col-md-12 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row" id="res"></div>
                    <div class="row mt-2">

                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="first name"
                                value="{{ auth()->user()->name }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <input type="text" name="email" disabled class="form-control"
                                value="{{ auth()->user()->email }}" placeholder="Email">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="mt-5 text-center"><a href="{{ route('dashboard') }}"><button id="btn" class="btn btn-secondary profile-button"
            type="submit">Kembali</button></a>
    </div>
@endsection
