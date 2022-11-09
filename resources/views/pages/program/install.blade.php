@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Initiative Install" >
                    <x-slot name="banner">
                    <img data-src="https://www.sef.org.pk/wp-content/uploads/2018/01/IMG_2342.jpg" class="lazyload"
                                 src="https://www.sef.org.pk/wp-content/uploads/2018/01/IMG_2342.jpg"
                                 style="width: 800px;height: 450px">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3>Introduction</h3>
                            <p> 
                            Established in 1992, The Sindh Education
                            Foundation (SEF) is a semi government
                            organization committed to empowering
                            disadvantaged communities of Sindh
                            towards social change by creating and
                            facilitating new approaches to learning
                            and education. Effective use of
                            information and communication
                            technologies can significantly help in
                            provision of quality education. Thus
                            Sindh Educational Foundation recognized
                            the need of developing and implementing
                            an effective android based e-learning
                            application in compliance with national
                            curriculum 2006. And when used in
                            conjunction with quality tablets, the
                            solution has a great potential to become
                            a ubiquitous and effective ICT tool for
                            students and teachers which would assist
                            them in the acquisition and development
                            of knowledge by using a unique blend of
                            technology, e-contents, and an
                            innovative pedagogy.
                            </p>
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="Programs">
                        <x-slot name="links">
                            <ul>
                                    <li>
                                        <a href="/alpt">AALPT</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/aasp">Adopt-a-School-Program (AASP)</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/fas">Foundation Assisted Schools(FAS)</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/functionalization-govt-school-building">Functionalization of Govt School Buildings</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/comprehensive-school">Comprehensive Schools</a>
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