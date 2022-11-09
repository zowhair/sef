@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Adolescent and Adult Learning and
                            Training Program (AALTP)" >
                    <x-slot name="banner">
                        <img src="https://www.sef.org.pk/wp-content/uploads/2019/12/1-4.jpg" alt="">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3> INTRODUCTION</h3>
                            <p> 
                            Adolescent and Adult Learning and
                            Training Program (AALTP), for
                            adolescents and adults who have missed
                            an opportunity to avail education. The
                            AALTP aims to provide accelerated formal
                            primary education for vulnerable
                            adolescents and basic functional
                            literacy for adults together with a
                            certified Skill Development / Vocational
                            Training course for each learner for
                            enabling them with varying opportunities
                            of human capital development and socio
                            economic growth.

                            The component of education will
                            financially be supported by SEF;
                            whereas, training component would be
                            funded through the Government of
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