<!--Start Work Process Area Style2 Alur Pelaporan-->
<section class="work-process-area style2" style="background-image: url(/assets/images/wave/wave_4.svg); background-repeat: no-repeat; background-position: bottom">
  <div class="container">
      <div class="sec-title-style4 text-center mb-4">
          <div class="big-title">
              <h2>Alur Pelaporan Ombudsman Republik Indonesia</h2>
          </div>
          <div class="border-box center">
              <div class="borders-left thm-bgc3"></div>
              <div class="borders-right thm-bgc3"></div>
          </div>
      </div>
      <div class="row">
          <!-- Kolom kiri untuk gambar pelaporan -->
          <div class="col-lg-6 col-md-12">
              @if ($laporans->isEmpty())
                  <p>Belum ada gambar pelaporan.</p>
              @else
                  @foreach ($laporans as $laporan)
                      <div class="image-box mb-4">
                          <img src="{{ asset('storage/' . $laporan->photo) }}" alt="Alur Pelaporan" class="img-fluid" />
                      </div>
                  @endforeach
              @endif
          </div>

          <!-- Kolom kanan untuk ikon dan teks -->
          <div class="col-lg-6 col-md-12">
              <div class="text-box">
                  <div class="col-12 mt-5">
                      <h2 class="mb-2">Cara Menyampaikan Laporan</h2>
                      <div class="list-style">
                          <div class="step">
                              <div class="icon-text">
                                  <img class="mb-2" src="/assets/images/alur-pelaporan/number/one.png" width="60" alt="" />
                                  <h5>Datang atau Bersurat ke Kantor Ombudsman RI Pusat atau Perwakilan di 34 Provinsi</h5>
                              </div>
                          </div>
                          <div class="step">
                              <div class="icon-text">
                                  <img class="mb-2" src="/assets/images/alur-pelaporan/number/circle-2.png" width="60" alt="" />
                                  <h5>Hubungi : Halo Ombudsman 137</h5>
                              </div>
                          </div>
                          <div class="step">
                              <div class="icon-text">
                                  <img class="mb-2" src="/assets/images/alur-pelaporan/number/circle-3.png" width="60" alt="" />
                                  <h5>WhatsApp ke: 0821 3737 3737</h5>
                              </div>
                          </div>
                          <div class="step">
                              <div class="icon-text">
                                  <img class="mb-2" src="/assets/images/alur-pelaporan/number/circle-4.png" width="60" alt="" />
                                  <h5>E-mail ke: <a href="">pengaduan@ombudsman.go.id</a></h5>
                              </div>
                          </div>
                          <div class="step">
                              <div class="icon-text">
                                  <img class="mb-2" src="/assets/images/alur-pelaporan/number/circle-5.png" width="60" alt="" />
                                  <h5>Mengisi Formulir Pengaduan Online di <a href="">ombudsman.go.id/pengaduan</a></h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--End Work Process Area Style2 Alur Pelaporan-->
