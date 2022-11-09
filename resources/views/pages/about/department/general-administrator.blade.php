@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="General Administration & Coordination (GA&C) Department" >
                    <x-slot name="banner">
                        <img data-src="https://www.sef.org.pk/wp-content/uploads/2020/03/Admin.jpg"
                                 class="lazyload"
                                 src="https://www.sef.org.pk/wp-content/uploads/2020/03/Admin.jpg">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3> INTRODUCTION</h3>
                            <p> 
                            The General Administration & Coordination (GA&C) Department is considered as a backbone of an organization. At SEF, GA&C department is committed to manage and regulate matters relating to Procurement including constitution of the procurement Committee, Sindh Public Procurement Authority, development of policy and protocols and coordination with the stakeholders, general office management, assets management, proper dissemination and utilization of stationaries and printing resources. GA&C also looks into transportation matters at grassroots level.
                            </p>
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="Department">
                        <x-slot name="links">
                            <ul>
                                    <li>
                                    <a href="/communication-and-research">Communication, Publication & Research</a>
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