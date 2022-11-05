<div class="col-12 col-sm-12 col-md-8 main-center-section-left">
    <div class="main-center-title">
        @if(isset($name))
        <h4>{{$name}}</h4>
        @endisset
    </div>
    <div class="widget-title"></div>
    
        <div >
            <div>
                <!-- introduction section -->
                @if(isset($banner))
                    {{ $banner }}
                @endisset
                @if(isset($maincontent))
                    {{ $maincontent }}
                @endisset
            </div>
            <div>
                <!-- Gallary section -->

                @if(isset($gallary))
                    {{ $gallary }}
                @endisset
            </div>
            <div>
                <!-- Faqs section -->
                @if(isset($faq))
                    {{ $faq }}
                @endisset
            </div>
        </div>
        
</div>
