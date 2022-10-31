@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Alumni" >
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <div class="inner-content-main  row">
                                <div class="post_img col-md-6 ">
                                    <div class="img_wrap">
                                        <img width="1200" height="800" alt=""
                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyloaded"
                                                src="{{asset('img/new-update1.jpg')}}">
                                    </div>
                                </div>
                                <div class="single_post_text news-text col-md-6  ">
                                    <div class="meta3">
                                        <a class="post__author" href="#"> Admin</a> <a class="date" href="#">March
                                            31, 2021</a>
                                    </div>
                                    <h6>
                                        JICA met with SEF higher management
                                    </h6>

                                    <div class="desc" style="font-size: 14px;line-height: 1.5rem;">
                                        The Managing Director SEF along with Deputy Managing Director (Operations) held
                                        a meeting on 3rd Oct 2022, with Dr. Akiko Hanaya (Senior Education Advisor)
                                        Japan International Cooperation Agency (JICA) at SEF Head Office. A brief
                                        introduction of the SEF portfolio and the expansion of the portfolio were also
                                        discussed.
                                    </div>

                                    <a href="/#" class="readmore"> Read More </a>
                                </div>
                            </div>
                            
                            <div class="inner-content-main row">
                                <div class="post_img col-md-6 ">
                                    <div class="img_wrap">
                                        <img width="1200" height="800" alt=""
                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyloaded"
                                                src="{{asset('img/new-update2.jpg')}}">
                                    </div>
                                </div>
                                <div class="single_post_text news-text col-md-6  ">
                                    <div class="meta3">
                                        <a class="post__author" href="#"> Admin</a> <a class="date" href="#">March
                                            31, 2021</a>
                                    </div>
                                    <h6>
                                        21st Program Steering Committee meeting
                                    </h6>

                                    <div class="desc" style="font-size: 14px;line-height: 1.5rem;">
                                        28th September, 2022, was the day when 21st Program Steering Committee meeting
                                        of Adopt-a-School Program was organized to seek approval from the competent
                                        forum the MD, SEF shared the recommendations of Program Screening Committee (was
                                        held on 30th May 2022)
                                    </div>

                                    <a href="/#" class="readmore"> Read More </a>
                                </div>
                            </div>
                            <div class="inner-content-main row">
                                <div class="post_img col-md-6 ">
                                    <div class="img_wrap">
                                        <img width="1200" height="780" alt=""
                                             class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyloaded"
                                             src="{{asset('img/news-update3.jpg')}}">
                                    </div>
                                </div>
                                <div class="single_post_text news-text col-md-6  ">
                                    <div class="meta3">
                                        <a class="post__author" href="#"> Admin</a> <a class="date" href="#">March
                                            31, 2021</a>
                                    </div>
                                    <h6>
                                    Honorable FM Commerce met SEF higher management
                                    </h6>

                                    <div class="desc" style="font-size: 14px;line-height: 1.5rem;">
                                        Honorable Federal Minister Commerce visited PSP Bulri Shah Karim TMK managed by
                                        PEN organization. He visited classrooms and appreciated the efforts of SEF, PMIU
                                        & PEN for providing quality education.
                                    </div>

                                    <a href="/#" class="readmore"> Read More </a>
                                </div>
                            </div>
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="Search">
                        <x-slot name="links">
                            <div id="search-1" class="widget widget_search">
                                <form method="get" action="/" class="search-form">
                                    <div class="d-flex">
                                        <input name="s" type="search" placeholder="Search here">
                                        <button type="submit" class="cbtn1">
                                            <div class="fa fa-search"></div>
                                        </button>
                                    </div>
                                    
                                </form>
                            </div>
                           
                        </x-slot>
                    </x-main-center.main-center-right-top>
                    <x-main-center.main-center-right-bottom name="Social Media">
                            <x-slot name="links1">
                                <div id="carbon_fields_theme_widget_newsprk_social_counter-1"
                                    class="widget social-counter carbon_fields_theme_widget_newsprk_social_counter">
                                    <div class="theme-3">
                                        <div class="follow_box widget-inner sociai_style3 mb30 border-radious5 inner_socail4">
                                            <div class="social_shares">
                                                <a class="single_social social_facebook" href="#">
                                                    <span class="follow_icon">
                                                        <i class="fab fa-facebook"></i>
                                                    </span>
                                                    <div class="social_counter_content">
                                                        <span class="social_counter_number">875541</span>
                                                        <span class="icon_text">Followers </span>
                                                    </div>
                                                </a>
                                                <a class="single_social social_twitter" href="">
                                                    <span class="follow_icon">
                                                        <i class="fab fa-twitter"></i>
                                                    </span>
                                                    <div class="social_counter_content">
                                                        <span class="social_counter_number">5002</span>
                                                        <span class="icon_text">Followers </span>
                                                    </div>
                                                </a>
                                                <a class="single_social social_youtube" href="#">
                                                    <span class="follow_icon">
                                                        <i class="fab fa-youtube"></i>
                                                    </span>
                                                    <div class="social_counter_content">
                                                        <span class="social_counter_number">64500</span>
                                                        <span class="icon_text">Followers </span>
                                                    </div>
                                                </a>
                                                <a class="single_social social_instagram" href="#">
                                                    <span class="follow_icon">
                                                        <i class="fab fa-instagram"></i>
                                                    </span>
                                                    <div class="social_counter_content">
                                                        <span class="social_counter_number">50,254</span>
                                                        <span class="icon_text">Followers </span>
                                                    </div>
                                                </a>
                                                <a class="single_social social_vimeo" href="#">
                                                    <span class="follow_icon">
                                                        <i class="fab fa-vimeo"></i>
                                                    </span>
                                                    <div class="social_counter_content">
                                                        <span class="social_counter_number">23434</span>
                                                        <span class="icon_text">Followers </span>
                                                    </div>
                                                </a>
                                                <a class="single_social social_medium" href="#">
                                                    <span class="follow_icon">
                                                        <i class="fab fa-medium"></i>
                                                    </span>
                                                    <div class="social_counter_content">
                                                        <span class="social_counter_number">5870</span>
                                                        <span class="icon_text">Followers </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </x-slot>
                    </x-main-center.main-center-right-bottom>
                </div>
            </div>
        </div>
        <!-- footer along with script tags -->
        @include('includes.footer')
    </main>
@stop