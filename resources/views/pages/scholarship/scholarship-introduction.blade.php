@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav/>
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Scholarship">
                    <x-slot name="banner">
                        <div class="main-container">
                            {{--                            <img src="{{asset('img/scholarship.png')}}" class="lazyload"></noscript>--}}
                            {{--                            <!-- <iframe width="853" height="480" src="https://www.youtube.com/embed/u6NtGsgXxdA"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe> -->--}}
                            {{--                            <span  data-video-id="u6NtGsgXxdA"  class="video_img_icon play_btn youtube">--}}
                            {{--                                <i class="fas fa-play"></i>--}}
                            {{--                            </span>--}}

                            {{--                            <iframe width="727" height="409" src="https://www.youtube.com/embed/A8j-tZtku9U" title="Sindh Education Foundation,Government of Sindh | Official Documentary" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                            <div class="video_img">
{{--                                <img alt=" Watch Roberto Martinez Say It Would Be A ‘Big Mistake’ To Boycott Qatar 2022"--}}
{{--                                     data-src="{{asset('img/scholarship.png')}}"--}}
{{--                                     class="lazyloaded"--}}
{{--                                     src="{{asset('img/scholarship.png')}}">--}}
                                <video width="720" src="{{ $scholarship[0]->video_path }}" controls></video>
{{--                                <noscript> --}}
{{--                                        src="{{$scholarship[0]->video_path}}"--}}
{{--                                        alt=" Watch Roberto Martinez Say It Would Be A &#8216;Big Mistake&#8217; To Boycott Qatar 2022">--}}
{{--                                </noscript>--}}
{{--                                <span data-video-id="A8j-tZtku9U" class="video_img_icon play_btn youtube">--}}
{{--                    <i class="fas fa-play"></i>--}}
                </span>

                            </div>
                        </div>
                    </x-slot>
                    <x-slot name="maincontent">
                        <div class="main-container">
                            <h3> INTRODUCTION</h3>
                            <p>
                                {{$scholarship[0]->introduction}}
                            </p>
                        </div>
                    </x-slot>
                    <x-slot name="gallary">
                        <div class="gallary">
                            @include('pages.scholarship.image_gallary',['data'=>$scholorshipGalleries])
                        </div>
                    </x-slot>
                    <x-slot name="faq">
                        <form class="mt-3 pb-3 faq-form">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Submit</button>
                        </form>
                        <div class="mt-4 pt-4"></div>
                    </x-slot>

                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="Scholarship">
                        <x-slot name="links">
                            <ul>
                                <li>
                                    <a href="#introduction" class="slide_link" data-id="intro">Introduction</a>
                                    <div class="border_black"></div>
                                </li>
                                <li>
                                    <a href="#gallary" class="slide_link" data-id="gallary">Gallary</a>
                                    <div class="border_black"></div>
                                </li>
                                <li>
                                    <a href="#faq-form" class="slide_link" data-id="faqs">FAQs</a>
                                    <div class="border_black"></div>
                                </li>
                            </ul>
                        </x-slot>
                    </x-main-center.main-center-right-top>
                    <x-main-center.main-center-right-bottom name="Recent News">
                        <x-slot name="links1">
                            <ul>
                                <p>
                                <li>
                                    Planning and Organizing Events, Seminars, Workshops
                                </li>
                                <li>
                                    Strengthening associations with the private sectors, academic institutions
                                </li>
                                </p>
                            </ul>
                        </x-slot>
                    </x-main-center.main-center-right-bottom>
                </div>
            </div>
        </div>
        <!-- footer along with script tags -->
        @include('includes.footer')
    </main>
    <script type="text/javascript" src="{{ URL::asset('js/tabs.js') }}"></script>
@stop
