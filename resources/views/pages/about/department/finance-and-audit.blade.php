@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Finance and Audit" >
                    <x-slot name="banner">
                        <img data-src="https://www.sef.org.pk/wp-content/uploads/2020/03/Finance.jpg"
                                 class="lazyload"
                                 src="https://www.sef.org.pk/wp-content/uploads/2020/03/Finance.jpg">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3> INTRODUCTION</h3>
                            <p> 
                            FA and A Department manages and controls all financial and accounts matters/functions in the Foundation, it deals with the Foundation’s accounting activities that include maintaining and reporting on both the cost and financial sets of accounts, records accounts payable and receivable, inventory, payroll, fixed assets and all other financial elements. Their key role tends to focus on immediate financial issues and management and also focus is to provide transparent, efficient and effective utilization of public money while abiding by all applicable Laws, Rules & Regulations governing the Foundation.
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