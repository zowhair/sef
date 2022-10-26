@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Adopt-a-School-Program (AASP)" >
                    <x-slot name="banner">
                        <img data-src="https://www.sef.org.pk/wp-content/uploads/2019/12/8.jpg" class="lazyload"
                                 src="https://www.sef.org.pk/wp-content/uploads/2019/12/8.jpg"
                                 style="width: 800px;height: 450px">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3> Vision</h3>
                            <p> 
                            Sindh Education Foundation has been a
                            pioneer in effectively engaging the
                            private sector and communities in
                            government school revival through the
                            Adopt-A-School-Program (AASP). The
                            program facilitates private sector and
                            civil society to adopt public or
                            government run schools and undertake
                            educational improvements for children.

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