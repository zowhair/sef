<div class="col-12 col-sm-12 col-md-8 main-center-section-left">
    <div class="main-center-title">
        @if(isset($name))
        <h4>{{$name}}</h4>
        @endisset
    </div>
    <div class="widget-title"></div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#introduction" type="button" role="tab" aria-controls="home" aria-selected="true">Introduction</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#gallary" type="button" role="tab" aria-controls="profile" aria-selected="false">Gallary</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#faq" type="button" role="tab" aria-controls="contact" aria-selected="false">FAQs</button>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="introduction" role="tabpanel" aria-labelledby="home-tab">
            @if(isset($banner))
                {{ $banner }}
            @endisset
            @if(isset($maincontent))
                {{ $maincontent }}
            @endisset
        </div>
        <div class="tab-pane fade" id="gallary" role="tabpanel" aria-labelledby="profile-tab">
            @if(isset($gallary))
                {{ $gallary }}
            @endisset
        </div>
        <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="contact-tab">
            @if(isset($faq))
                {{ $faq }}
            @endisset
        </div>
        </div>
    
</div>
