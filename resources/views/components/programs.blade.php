<div class="programs-section">
  <div class="container">
    <h1>Programs</h1>
    <div class="bottom-programs-slider">
      <!-- first card -->
      @for($i =1; $i<5;$i++) 
      <div class="bottom-programs-slider-card">
        <div class="slider-card-box box-{{$i}}">
            <div class="bottom-programs-slider-card-logo">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
              <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
              <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
              </svg>
            </div>
            <div class="bottom-programs-slider-card-heading">
              <h6 class="bottom-programs-slider-card-heading-wrap">Adolescent and Adult Learning and Training Program (AALTP)
              </h6>
            </div>
          <div class="bottom-programs-slider-card-text">
            <p class="bottom-programs-slider-card-text-wrap">
              Adolescent and Adult Learning and Training Program (AALTP), for adolescents and adults who have missed an opportunity to avail education.
            </p>
          </div>
        </div>
      </div>
      @endfor
    </div>
  </div>
</div>