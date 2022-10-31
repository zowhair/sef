@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Care for Life Education" >
                    <x-slot name="banner">
                        <img data-src="https://www.sef.org.pk/wp-content/uploads/2020/11/CFL.jpg" class="lazyload"
                                 src="https://www.sef.org.pk/wp-content/uploads/2020/11/CFL.jpg"
                                 style="width: 800px;height: 450px">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3> INTRODUCTION</h3>
                            <p> In 2020, Sindh Education Foundation
                                decided to implement CFL in its schools
                                and partnered with Join Hands under MoU
                                for this purpose. However due to impact
                                of COVID-19 SEF and Join hands decided
                                to delay the Launch of CFL in Pakistan
                                by one year.

                                After a year the program will be
                                formally launched in the schools and
                                this will be 3 years pilot project and
                                50 schools from Karachi and Hyderabad
                                will be introducing Caring for Life
                                Education Curriculum.
                            </p>
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="Resource">
                        <x-slot name="links">
                            <ul>
                                    <li>
                                        <a href="/care-for-life">Care for Life Education</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/notification">Notification</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/anunal_report">E-Publication</a>
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