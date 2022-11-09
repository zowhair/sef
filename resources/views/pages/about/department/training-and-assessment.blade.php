@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Training and Assessment Department" >
                    <x-slot name="banner">
                        <img data-src="https://www.sef.org.pk/wp-content/uploads/2020/03/Training.jpg"
                                 class="lazyload"
                                 src="https://www.sef.org.pk/wp-content/uploads/2020/03/Training.jpg">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3> INTRODUCTION</h3>
                            <p> 
                            Assessment and that of high quality is imperative for the success of the goals set by the Government of Pakistan for Educational Reforms. Keeping this view in mind of having good quality assessment, the Sindh Education Foundation, Govt. of Sindh has setup its very own Assessment Unit to assess the students’ learning outcomes of its partner schools. The major role of the Assessment Unit of SEF is to assess the students of all the schools working under its supervision and guidance. The Assessment Unit works dynamically from designing to the execution and conducts quality examinations both in English and Sindhi based on the National Curriculum given by the Ministry of Education (M&E).
                            </p>
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="Department">
                        <x-slot name="links">
                            <ul>
                                    <li>
                                        <a href="/communication-and-research">Communication, Publication & Research </a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/finance-and-audit">Finance and Audit</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/general-administrator">General Administration</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/human-resource">Human Resource</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/information-tech">Information Technology</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/planing-and-program">Planning And Programs</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/training-and-assessment">Training and Assessment</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/monitoring-and-evaluation-cell">Monitoring and Evaluation Cell</a>
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