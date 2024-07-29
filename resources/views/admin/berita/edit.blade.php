@extends('admin.layouts.main')

@section('title')
    Tambah Berita
@endsection

@section('content')
    
  <div class="container mt-4">
    <form action="/kelola/beritas/{{ $berita->id }}" method="POST" >
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="judul_berita" class="form-label"><b>Judul Berita</b></label>
          <input class="form-control" id="judul_berita" type="text" name="judul_berita" value="{{ old('judul_berita', $berita->judul_berita) }}">
        </div>

        <br>

        <div class="mb-3">
          <label for="link_berita" class="form-label"><b>Link Berita</b></label>
          <input class="form-control" id="link_berita" type="text" name="link_berita" value="{{ old('link_berita', $berita->link_berita) }}">
        </div>
        
        <br>
        
        <div class="mb-3">
            <label for="link_gambar" class="form-label"><b>Link Gambar</b></label>
            <input class="form-control" id="link_gambar" type="text" name="link_gambar" value="{{ old('link_gambar',$berita->link_gambar) }}">
        </div>


        <button type="submit" class="btn btn-primary mt-5 mb-5">Ubah Berita</button>
      </form>
  </div>
  
@endsection