@extends('admin.layouts.main')

@section('title')
    Tambah Visi dan Misi
@endsection

@section('content')
<div class="container mt-5">
  <h2>Tambah Visi dan Misi</h2>
  <form action="{{ route('visimisi.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="jenis" class="form-label">Jenis</label>
      <select id="jenis" name="jenis" class="form-select @error('jenis') is-invalid @enderror">
        <option value="Visi" {{ old('jenis') == 'Visi' ? 'selected' : '' }}>Visi</option>
        <option value="Misi" {{ old('jenis') == 'Misi' ? 'selected' : '' }}>Misi</option>
      </select>
      @error('jenis')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <textarea id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
      @error('deskripsi')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
</div>
@endsection
