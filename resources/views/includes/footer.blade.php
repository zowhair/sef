        @include('components.footer-content')

    @include('components.scripts-links')

    <script type='text/javascript' id='newsprk-main-js-extra'>
        /* <![CDATA[ */
        var newsprk_obj = {
            "newsticker_slider": {
                "newsticker_slider_timeout": "3000",
                "newsticker_slider_speed": "3000",
                "newsticker_autoplay_enable": true,
                "newsticker_nav_enable": true,
                "autoplay_hover_pause": true
            }
        };
    /* ]]> */
    </script>
<script>

  // tender datatables
  $(document).ready(function () {
    $('#example').DataTable();
  });

    // programs =- bottom card slider 
    $('.bottom-programs-slider').slick({
      speed: 500,
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      arrows:true,
      slidesToShow: 3,
      slidesToScroll: 3,
      prevArrow: `<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;"><i class="far fa-angle-left"></i></button>`,
      nextArrow: `<button class="slick-next slick-arrow" aria-label="Previous" type="button" style="display: block;"><i class="far fa-angle-right"></i></button>`,
      
       
      // centerMode: true,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          // centerMode: true,
          }
        }, 
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true,
            infinite: true,
          } 
        },  
        {
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        }
      }]
    });

    
    // main carousel -Landing Page
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav',
        
        
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        focusOnSelect: true,
        prevArrow: `<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;"><i class="far fa-angle-left arrow-left-12345"></i></button>`,
        nextArrow: `<button class="slick-next slick-arrow" aria-label="Previous" type="button" style="display: block;"><i class="far fa-angle-right arrow-right-12345"></i></button>`,
       
    });

    $('a[data-slide]').click(function(e) {
        e.preventDefault();
        var slideno = $(this).data('slide');
        $('.slider-nav').slick('slickGoTo', slideno - 1);
    });

    // right tabs with carousel -Landing Page
    const pillsTab = document.querySelector('#pills-tab');
const pills = pillsTab.querySelectorAll('button[data-bs-toggle="pill"]');

pills.forEach(pill => {
  pill.addEventListener('shown.bs.tab', (event) => {
    const { target } = event;
    const { id: targetId } = target;
    
    savePillId(targetId);
  });
});

const savePillId = (selector) => {
  localStorage.setItem('activePillId', selector);
};

const getPillId = () => {
  const activePillId = localStorage.getItem('activePillId');
  
  // if local storage item is null, show default tab
  if (!activePillId) return;
  
  // call 'show' function
  const someTabTriggerEl = document.querySelector(`#${activePillId}`)
  const tab = new bootstrap.Tab(someTabTriggerEl);

  tab.show();
};

// get pill id on load
getPillId();
</script>
