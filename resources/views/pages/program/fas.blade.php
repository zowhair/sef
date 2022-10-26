@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Foundation Assisted Schools(FAS)" >
                    <x-slot name="banner">
                        <img data-src="https://www.sef.org.pk/wp-content/uploads/2019/12/2-3.jpg" class="lazyload"
                                 src="https://www.sef.org.pk/wp-content/uploads/2019/12/2-3.jpg"
                                 style="width: 800px;height: 450px">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3>OverView</h3>
                            <p> 
                            The Foundation Assisted Schools (FAS)
                            Program is the integration of the four
                            notable programs of the Foundation which
                            include SEF Assisted Schools (SAS),
                            Promoting Private Schools in Rural Sindh
                            (PPRS), Existing Schools Support Program
                            (EESP), and SEF Middle and High School
                            Program (SMHSP). The evolution of
                            Foundation Assisted Schools (FAS) is yet
                            another step towards strengthening the
                            Public Private Partnership (PPP) model
                            of the Foundation for the purpose of
                            promoting the twin goals of equitable
                            access to, and improving the quality of
                            education for all the children across
                            Sindh.
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