    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          @for($i=0; $i<5; $i++)
            <div class="panel-wrapper">
              <div class="alpha">
                <div class="image">
                  <img src="{{ asset('img/dd.jpg') }}" />
                </div>
              </div>
              <div class="beta">
                <a href="#" class="title-link">
                  <h5 class="title">
                    This is title  lkjh ljh tjh
                  </h5>
                </a>
                <div class="lower-content">
                  <a href="#" class="lower-content-left">
                    News
                  </a>

                  <div class="lower-content-date">
                    June 20, 2022
                  </div>
                </div>
              </div>
            </div>
          @endfor
        </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        @for($i=0; $i<5; $i++)
            <div class="panel-wrapper">
              <div class="alpha">
                <div class="image">
                  <img src="{{ asset('img/dd.jpg') }}" />
                </div>
              </div>
              <div class="beta">
                <a href="#" class="title-link">
                  <h5 class="title">
                    This is title  lkjh ljh tjh
                  </h5>
                </a>
                <div class="lower-content">
                  <a href="#" class="lower-content-left">
                    News
                  </a>
                  <div class="lower-content-date">
                    June 20, 2022
                  </div>
                </div>
              </div>
            </div>
          @endfor
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        @for($i=0; $i<5; $i++)
            <div class="panel-wrapper">
              <div class="alpha">
                <div class="image">
                  <img src="{{ asset('img/dd.jpg') }}" />
                </div>
              </div>
              <div class="beta">
                <a href="#" class="title-link">
                  <h5 class="title">
                    This is title  lkjh ljh tjh
                  </h5>
                </a>
                <div class="lower-content">
                  <a href="#" class="lower-content-left">
                    News
                  </a>
                  <div class="lower-content-date">
                    June 20, 2022
                  </div>
                </div>
              </div>
            </div>
          @endfor
    </div>