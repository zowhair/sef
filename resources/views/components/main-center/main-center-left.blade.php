<div class="col-8 main-center-section-left">
    <div class="main-center-title">
        @if(isset($name))
        <h4>{{$name}}</h4>
        @endisset
    </div>
    <div class="widget-title"></div>
    @if(isset($banner))
        {{ $banner }}
    @endisset
    @if(isset($maincontent))
        {{ $maincontent }}
    @endisset
</div>