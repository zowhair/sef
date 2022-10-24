<div class="main-center-section-right-top">
            <div class="main-center-right-title">
                <h5>
                    @if(isset($name))
                        {{ $name }}
                    @endisset
                </h5>
            </div>
            <div class="widget-title"></div>
            <div class="main-center-right-list">
                @if(isset($links1))
                    {{ $links1 }}
                @endisset
                <div class="border_black"></div>
            </div>
        </div>