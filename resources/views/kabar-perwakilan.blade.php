     
      <!--Start Latest Projects Area Kabar Perwakilan-->
      <section class="latest-project-area" style="background-image: url(/assets/images/wave/wave.svg);background-repeat: no-repeat;background-position: bottom">
        <div class="container" >
          <div class="top">
            <div class="sec-title">
              <div class="title" id="section3"></div>
              <br>
              <br>
              <br>
              <div  class="big-title">
                <h2><span>Kabar Perwakilan</span></h2>
                <div class="border-box"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="outer-container">
          <div
            class="theme-carousel project-carousel owl-carousel owl-theme owl-dot-style2"
            data-options='{"loop":true, "margin":30, "autoheight":true, "nav":false, "dots":true, "autoplay":true, "autoplayTimeout":10000, "smartSpeed":700, "responsive":{ "0":{"items": "1"}, "768":{"items": "2"}, "1199":{"items": "3" }}}'
          >

            @foreach ($beritas as $berita)
              
            <!--Start Single project Style1-->
            <div class="single-project-style1">
              <div class="img-holder">
                <div class="inner">
                  <img style="width: 330px;height: 330px; object-fit: cover" 
                    src="{{ $berita->link_gambar }}"
                    alt="Awesome Image"
                  />
                  <div class="overlay-style-one bg1">
                    <div class="box">
                      <div class="content">
                        <div class="zoom-button">
                          <a
                            class="lightbox-image"
                            data-fancybox="gallery"
                            href="{{ $berita->link_gambar }}"
                          >
                            <img
                              src="/assets/images/icon/zoom.png"
                              alt="Zoom Icon"
                            />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="read-more-button">
                  <a class="thm-bgc1" style="background: #f08519" href="project-single.html"
                    ><span class="flaticon-next"></span
                  ></a>
                </div>
              </div>
              <div class="text-holder">
                <h3><a href="{{ $berita->link_berita }}">{{ $berita->judul_berita }}</a></h3>
              </div>
            </div>
            <!--End Single project Style1-->
            @endforeach


          </div>
        </div>
      </section>
      <!--End Latest Projects Area Kabar Perwakilan-->