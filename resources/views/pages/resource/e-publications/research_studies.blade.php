@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Reseach Studies" >
                    <x-slot name="banner">
                    
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <div class="row">
                                <div class="col-3 col-md-3">
                                    <div>
                                        <img data-src="https://www.sef.org.pk/wp-content/uploads/2022/06/thematic_iamge.png"
                                            class="lazyload"
                                            src="https://www.sef.org.pk/wp-content/uploads/2022/06/thematic_iamge.png">
                                    </div>
                                    <div class="text-center mt-4">
                                        <h6>Issues of Girls’ Education in Sindh</h6>
                                        <p class="inner-content-text">A study conducted on the initiative of the Provincial Ombudsman Sindh – December 2020</p>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="E-Publication">
                        <x-slot name="links">
                            <ul>
                                    <li>
                                        <a href="/anunal_report">Anunal Report</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/research_studies">Research Studies</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/news_letters">News Letters</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/sujaag">Sujaag</a>
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