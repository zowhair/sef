        @include('components.footer-content')
    </header>

    @include('components.scripts-links')

<script>

    // programs =- bottom card slider 
    $('.bottom-programs-slider').slick({
      infinite: true,
      arrows:true,
      slidesToShow: 3,
      slidesToScroll: 3
    });

    
    // main carousel -Landing Page
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        focusOnSelect: true
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
