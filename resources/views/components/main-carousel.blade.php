<div class="container">
  <div class="row">
    <div class="col-8 left-pills-col">
      <div class="main-carousel">
        <div class="slider slider-for">
          @for($i=1; $i<=5; $i++)
          <div class="slide-item">
            <a href="#s" class="main-image-link">
              <img src="{{ asset('img/dd.jpg') }}" width="500px" />
            </a>
            <div class="contents-wrap">
              <h4 class="pre-title">meetings / Sep 04, 2022</h4>
              <h1 class="title">Orientation session organized for SSESP scholars at Public School Korangi</h1>
              <p class="text">The Sindh Education Foundation came into collaboration with Sindh School System the adapter of Public School Korangi under its Scholarship Program to support</p>
            </div>
          </div>
          @endfor
        </div>
        <div class="slider slider-nav">
          @for($i=1;$i<=5;$i++)
            <div>
              <img class="custom-height" src="{{ asset('img/dd.jpg') }}" width="100px" />
            </div>
          @endfor
        </div>
        <!-- <div class="action">
          <a href="#" data-slide="3">go to slide 3</a>
          <a href="#" data-slide="4">go to slide 4</a>
          <a href="#" data-slide="5">go to slide 5</a>
        </div> -->
      </div>
    </div>
    <div class="col-4 right-pills-col">
      
      @component('components.main-carousel-sidebar',["data"=>$data])@endcomponent
    </div>
  </div>
</div>