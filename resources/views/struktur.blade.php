      <!--Start Work Process Area Style2 Struktur Organisasi-->
      <section class="work-process-area style2">
        <div class="shape1">
          <img src="/assets/images/shape/round-box.png" alt="" />
        </div>
        <div class="shape2 rotate-me">
          <img src="/assets/images/shape/round-box-2.png" alt="" />
        </div>
        <div class="shape3 rotate-me">
          <img src="/assets/images/shape/shape-1.png" alt="" />
        </div>
        <div class="container">
          <div
            class="sec-title-style4 text-center"
            style="margin-bottom: 0px; padding-bottom: 0px"
          >
            <p id="section5"></p>
            <div class="big-title">
              <h2>
                Struktur Organisasi<br />
                Ombudsman Republik Indonesia
              </h2>
            </div>
            <div class="border-box center">
              <div class="borders-left thm-bgc3"></div>
              <div class="borders-right thm-bgc3"></div>
            </div>
          </div>
          @if($strukturOrganisasis->isNotEmpty())
            <img
              style="margin-top: 0"
              src="{{ asset('storage/' . $strukturOrganisasis->last()->photo) }}"
              width="1500"
              alt="Struktur Organisasi"
            />
          @else
            <p>No Struktur Organisasi available.</p>
          @endif
        </div>
    </section>
    
      <!--End Work Process Area Style2 Struktur Organisasi-->