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
                        <div  class="main-content-div main-container">
                            @foreach($partnerInstitutions as $partnerInstitution)
                            <div class="single_post widgets_small">
                                <div class="post_img">
                                    <a href="#">
                                        <img src="{{$partnerInstitution->image_path}}" alt="Sukkur IBA Community Colleges" class="lazyloaded" data-ll-status="loaded"><noscript><img  alt="Britney Spears&#039; Attorney Files Petition To Remove Her Father From Overseeing Her Medical Decisions" data-src="https://wp.quomodosoft.com/newsprk/home-6/wp-content/uploads/sites/5/2020/06/27-150x150.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://wp.quomodosoft.com/newsprk/home-6/wp-content/uploads/sites/5/2020/06/27-150x150.png" alt="Britney Spears&#039; Attorney Files Petition To Remove Her Father From Overseeing Her Medical Decisions"></noscript>

                                    </a>
                                </div>
                                <div class="single_post_text">
                                    <h4> <a href="#"> {{$partnerInstitution->institution_name}}</a> </h4>
                                    <p class="meta">
                                        <a href="#"> {{$partnerInstitution->category}}</a>  
                                        <span>   {{$partnerInstitution->date}}</span>
                                    </p>


                                </div>
                            </div>
                          @endforeach

                            <div class="border_black"></div>
                        </div>
                       
                    </x-slot>
                    <x-slot name="gallary">
                        <div class="gallary">
                        <img src="{{asset('img/scholarship.png')}}" class="lazyload"></noscript>
                        </div>
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="Scholarship">
                        <x-slot name="links">
                            <ul>
                                <li>
                                    <a href="#introduction" class="slide_link"  data-id="intro">Introduction</a>
                                    <div class="border_black"></div>
                                </li>
                                <li>
                                    <a href="#gallary" class="slide_link"  data-id="gallary" >Gallary</a>
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