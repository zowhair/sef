<body
    class="page-template page-template-page-templates page-template-homepage page-template-page-templateshomepage-php page page-id-7176 theme-newsprk woocommerce-no-js sidebar-active woocommerce-active elementor-default elementor-kit-5487 elementor-page elementor-page-7176">

    <div class="newsprk-er-back-to-top" style="">
        <p> Back to Top <i class="fal fa-long-arrow-right"></i></p>
    </div> <a class="skip-link screen-reader-text" href="#site-content">Skip to content</a>
    
        @include('frontend.layouts.app')
        @include('frontend.layouts.navbar')
       
        <div data-elementor-type="wp-page" data-elementor-id="7176" class="elementor elementor-7176"
        data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
               
                @include("frontend.layouts.home_content")
                @include("frontend.component.program")
            </div>
        </div>
    </div>
   
    
   
    @include("frontend.layouts.footer");

   
</body>

</html>
   