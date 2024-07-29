      <!-- Start Main Slider Foto Slide-->
      <section id="section1" class="main-slider style1">
        <div class="slider-box">
          <!-- Banner Carousel -->
          <div class="banner-carousel owl-theme owl-carousel">

            @foreach ($sliders as $slider)
                
            <!-- Slide -->
            <div class="slide">
              <div
                class="image-layer"
                style="height: 100vh; background-image: url({{ asset('storage/' . $slider->foto) }});">
              </div>
              <div class="auto-container">
                <div class="content">
                  <h5>Perwakilan Ombudsman RI Kalimantan Selatan</h5>
                  <div class="border-box"></div>
                  <h2>
                    {!! $slider->judul_foto !!}
                  </h2>
                  {{-- <div class="btns-box">
                    <a class="btn-one thm-bgc1" href="#"
                      ><span class="txt">Learn More</span></a
                    >
                  </div> --}}
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- End Main Slider Foto Slide-->