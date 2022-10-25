<div class="main-center-section-right-top">
            <div class="main-center-right-title">
                @if(isset($name))
                    <h5>{{$name}}</h5>
                @endisset
            </div>
            <div class="widget-title"></div>
            <div class="main-center-right-list">
                @if(isset($links))
                    {{ $links }}
                @endisset
            </div>
        </div>