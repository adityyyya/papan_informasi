@extends('admin.layouts.main')

@section('title')
    Edit Visi dan Misi
@endsection

@section('content')

<h1>Edit Visi dan Misi</h1>

<form action="{{ route('visimisi.update', $visiMisi->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="jenis" class="form-label">Jenis</label>
        <select id="jenis" name="jenis" class="form-select" required>
            <option value="Visi" {{ $visiMisi->jenis == 'Visi' ? 'selected' : '' }}>Visi</option>
            <option value="Misi" {{ $visiMisi->jenis == 'Misi' ? 'selected' : '' }}>Misi</option>
        </select>
        @error('jenis')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" class="form-control" rows="3" required>{{ $visiMisi->deskripsi }}</textarea>
        @error('deskripsi')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('visimisi.index') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection
