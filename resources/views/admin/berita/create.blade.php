@extends('admin.layouts.main')

@section('title')
Tambah Berita
@endsection

@section('content')

<div class="container mt-4">
  <form method="POST" action="/kelola/beritas">
    @csrf
    <div class="mb-3">
      <label for="judul_berita" class="form-label"><b>Judul Berita</b></label>
      <input class="form-control" id="judul_berita" type="text" name="judul_berita" value="{{ old('judul_berita') }}">
    </div>

    <br>

    <div class="mb-3">
      <label for="link_berita" class="form-label"><b>Link Berita</b></label>
      <input class="form-control" id="link_berita" type="text" name="link_berita" value="{{ old('link_berita') }}">
    </div>

    <br>

    <div class="mb-3">
      <label for="link_gambar" class="form-label"><b>Link Gambar</b></label>
      <input class="form-control" id="link_gambar" type="text" name="link_gambar" value="{{ old('link_gambar') }}"
        onchange="previewGambar(this.value)">
        
      <br>
      Preview :  
      <div id="preview-gambar"></div>
    </div>


    <button type="submit" class="btn btn-primary mt-5 mb-5">Tambah Berita</button>
  </form>
</div>

<script>
  function previewGambar(link) {
      document.getElementById('preview-gambar').innerHTML = '<img src="'+link+'" width="200">'; 
    }
</script>

@endsection