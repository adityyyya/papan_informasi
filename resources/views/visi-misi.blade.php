<!--Start About Style3 Area Visi dan Misi-->
<section id="section2" class="about-style3-area">
  <div class="container">
      <div class="row">
          <div class="col-xl-6 col-lg-9 col-md-10">
              <div class="about-style3-image-box">
                  <div class="patter-box"
                      style="background-image: url(/assets/images/pattern/pattern-bg-1.png);"></div>
                  <div class="inner">
                      <img style="width: 550px;height: 825px; object-fit: cover"
                          src="/assets/images/slider/3.jpeg"
                          alt="Awesome Image" />
                  </div>
              </div>
          </div>
          <div class="col-xl-6 col-lg-12">
              <div class="about-style3-text-box">
                  <div class="sec-title-style4">
                      <p>ABOUT COMPANY</p>
                      <div class="big-title">
                          <h2>
                              Visi dan Misi<br />
                              Ombudsman
                          </h2>
                      </div>
                      <div class="border-box">
                          <div class="borders-left thm-bgc3"></div>
                          <div class="borders-right thm-bgc3"></div>
                      </div>
                  </div>
                  <div class="inner-contant">
                      <div class="text-holder"></div>
                      <ul>
                          @foreach ($visiMisi as $item)
                          <li>
                              <div class="icon">
                                  <span class="flaticon-{{ $item->jenis == 'Visi' ? 'planning' : 'business' }}"></span>
                              </div>
                              <div class="text">
                                  <h3>{{ $item->jenis }}</h3>
                                  <p>{{ $item->deskripsi }}</p>
                              </div>
                          </li>
                          @endforeach
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>