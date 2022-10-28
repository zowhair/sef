@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Scholarship" >
                    <x-slot name="banner">
                            
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <div class="single_post widgets_small">
                                <div class="post_img">
                                    <a href="#">
                                        <img src="{{asset('img/scholarship.png')}}" alt="Sukkur IBA Community Colleges" class="lazyloaded" data-ll-status="loaded"><noscript><img  alt="Britney Spears&#039; Attorney Files Petition To Remove Her Father From Overseeing Her Medical Decisions" data-src="https://wp.quomodosoft.com/newsprk/home-6/wp-content/uploads/sites/5/2020/06/27-150x150.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://wp.quomodosoft.com/newsprk/home-6/wp-content/uploads/sites/5/2020/06/27-150x150.png" alt="Britney Spears&#039; Attorney Files Petition To Remove Her Father From Overseeing Her Medical Decisions"></noscript>

                                    </a>
                                </div>
                                <div class="single_post_text">
                                    <h4> <a href="#"> Sukkur IBA Community Colleges</a> </h4>
                                    <p class="meta">
                                        <a href="#">College</a>  
                                        <span>  June 14, 2020</span>
                                    </p>


                                </div>
                            </div>
                            <div class="border_black"></div>

                            <div class="single_post widgets_small">
                                <div class="post_img">
                                    <a href="#">
                                        <img src="{{asset('img/download.jfif')}}" alt="Public Schools Managed by Sukkur IBA University" class="lazyloaded" data-ll-status="loaded"><noscript><img  alt="Jessica Simpson Includes Heartbreaking Entry About Ex Nick Lachey In Paperback Edition Of &#039;Open Book&#039;" data-src="https://wp.quomodosoft.com/newsprk/home-6/wp-content/uploads/sites/5/2020/06/entertainment__7-1-150x150.jpg" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://wp.quomodosoft.com/newsprk/home-6/wp-content/uploads/sites/5/2020/06/entertainment__7-1-150x150.jpg" alt="Jessica Simpson Includes Heartbreaking Entry About Ex Nick Lachey In Paperback Edition Of &#039;Open Book&#039;"></noscript>

                                    </a>
                                </div>
                                <div class="single_post_text">
                                    <h4> <a href="#"> Public Schools Managed by Sukkur IBA University</a> </h4>
                                    <p class="meta">
                                        <a href="#">College</a>                                                                                    <span>  June 14, 2020                                            </span>

                                    </p>


                                </div>
                            </div>

                            <div class="border_black"></div>
                            <div class="single_post widgets_small">
                                <div class="post_img">
                                    <a href="#">
                                        <img src="{{asset('img/njv.jfif')}}" alt="NJV Higher Secondary School, Karachi" class="lazyloaded" data-ll-status="loaded"><noscript><img  alt="Mansion Global Daily: Green Homes Are Growing, Home Sales Up In British Columbia, And More" data-src="https://wp.quomodosoft.com/newsprk/home-6/wp-content/uploads/sites/5/2020/06/entertainment__10-1-150x150.jpg" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://wp.quomodosoft.com/newsprk/home-6/wp-content/uploads/sites/5/2020/06/entertainment__10-1-150x150.jpg" alt="Mansion Global Daily: Green Homes Are Growing, Home Sales Up In British Columbia, And More"></noscript>

                                    </a>
                                </div>
                                <div class="single_post_text">
                                    <h4> <a href="#"> NJV Higher Secondary School, Karachi</a> </h4>
                                    <p class="meta">
                                        <a href="#">School</a>                                                                                    <span>  June 14, 2020                                            </span>

                                    </p>


                                </div>
                            </div>

                            <div class="border_black"></div>
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="Programs">
                        <x-slot name="links">
                            <ul>
                                    <li>
                                        <a href="/scholarship">Introduction</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/partner-institution">Partner Institution</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/annoncements">Annoncements</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/alumni">Alumni</a>
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
@stop