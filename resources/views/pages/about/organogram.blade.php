@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Educational Framework" >
                    <x-slot name="banner">
                        <img data-src="https://www.sef.org.pk/wp-content/uploads/2020/01/NEW-ORGANOGRAM-01.png"
                                 class="lazyload"
                                 src="https://www.sef.org.pk/wp-content/uploads/2020/01/NEW-ORGANOGRAM-01.png"
                                 style="width: 800px;">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3></h3>
                            
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="About">
                        <x-slot name="links">
                            <ul>
                                    <li>
                                        <a href="/introduction">Introduction</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/education_framework">Educational Framework</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/organogram">Organogram</a>
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