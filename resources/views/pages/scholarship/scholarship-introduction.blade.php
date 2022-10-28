@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Scholarship" >
                    <x-slot name="banner">
                            <img src="{{asset('img/scholarship.png')}}" class="lazyload"></noscript>
                            <!-- <iframe width="853" height="480" src="https://www.youtube.com/embed/u6NtGsgXxdA"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe> -->
                            <span  data-video-id="u6NtGsgXxdA"  class="video_img_icon play_btn youtube">
                                <i class="fas fa-play"></i>
                            </span>
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3> INTRODUCTION</h3>
                            <p> 
                            The Sindh Education Foundation had initiated its Scholarship Program “Sindh School Education Scholarship Program” (SSESP) in 2017 to honor and to encourage talented students of Sindh Province with and objective to link them with quality institutions across Pakistan to pursue their post-primary education up-to higher secondary level. SSESP is a fully funded scholarship program running under School Education and Literacy Department Government of Sindh (SE&LD) and managed by Sindh Education Foundation, Government of Sindh. Scholarship program aims to encourage meritorious students academically and socially to find the best opportunities for future success and skilled with the visionary practices, which can help to create their own paths.
                            </p>
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