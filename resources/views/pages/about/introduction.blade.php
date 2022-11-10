@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="SINDH EDUCATION FOUNDATION GOVERNMENT OF SINDH" >
                    <x-slot name="banner">
                        <img data-src="https://www.sef.org.pk/wp-content/uploads/2019/12/1-2.jpg" class="lazyload"
                                 src="https://www.sef.org.pk/wp-content/uploads/2019/12/1-2.jpg"
                                 style="width: 800px;height: 450px">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <p> The Sindh Education Foundation (SEF), was
                                established under the Sindh Education
                                Foundation Act, 1992 as a
                                semi-autonomous organization with a
                                mandate to support education in the
                                province through multifarious
                                interventions.

                                The Act provides wide ranging powers to
                                the Foundation to support education
                                sector through a large number of
                                instruments and support activities.

                                Since its establishment in 1992, the
                                Foundation has made serious efforts to
                                increase access to quality education for
                                the students across Sindh especially
                                those in the remote and under developed
                                regions of the province.
                            </p>
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