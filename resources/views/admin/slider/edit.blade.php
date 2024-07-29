@extends('admin.layouts.main')

@section('title')
    Tambah Foto
@endsection

@section('content')
    
  <div class="container mt-5">
    <form method="POST" action="/kelola/slider/{{ $slider->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="judul_foto" class="form-label"><b>Judul Foto</b></label>
          <input id="judul_foto" type="hidden" name="judul_foto" value="{{ $slider->judul_foto }}">
          <trix-editor input="judul_foto"></trix-editor>
        </div>
        
        <br>
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label"><b>Foto</b></label>
          <input type="hidden" name="oldImage" value="{{ $slider->foto }}" id="">
          <input name="foto" type="file" class="form-control" id="exampleInputPassword1" onchange="loadFile(event)">
          <div id="emailHelp" class="form-text">Ukuran 1920 x 1100</div>
          
          <h5 class="mt-3">Preview :</h5>
          @if ($slider->foto)
            <img class="img-fluid" style="max-height: 300px;max-width: 600px" src="{{ asset('storage/'. $slider->foto) }}" id="output"/>                                        
          @else
            <img class="img-fluid" style="max-height: 300px;max-width: 600px" src="https://www.kliknusae.com/img/404.jpg" id="output"/>                    
          @endif

        </div>


        <button type="submit" class="btn btn-primary mt-5 mb-5">Edit Foto Slider</button>
      </form>
  </div>
  

  @section('script')
  <script>
    var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
  </script>
  @endsection
@endsection