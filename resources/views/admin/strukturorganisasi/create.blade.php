@extends('admin.layouts.main')

@section('title')
    Tambah Foto Struktur Organisasi
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Tambah Foto Struktur Organisasi</h2>
            <form action="{{ route('strukturorganisasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                    @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
