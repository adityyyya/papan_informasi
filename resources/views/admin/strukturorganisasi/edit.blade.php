@extends('admin.layouts.main')

@section('title')
    Tambah Foto Struktur Organisasi
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Foto Struktur Organisasi</h2>
            <form action="{{ route('strukturorganisasi.update', $strukturOrganisasi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                    @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <img src="{{ asset('storage/'.$strukturOrganisasi->photo) }}" width="100" height="100" class="mt-2">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
