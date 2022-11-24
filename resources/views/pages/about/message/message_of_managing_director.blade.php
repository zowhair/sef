@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
<x-nav />
<main>
    <div class="container">
        <div class="row">
            <x-main-center.main-center-left name="MESSAGE OF HONORABLE CHIEF MINISTER, SINDH">
                <!-- <div class='child-row'> -->
                <x-slot name="banner">
                    <div class='child-row d-flex'>
                        <div class="image-div">
                            <img data-src="https://www.sef.org.pk/wp-content/uploads/2021/06/cm-sindh.png"
                                class="lazyloadImage"
                                src="https://www.sef.org.pk/wp-content/uploads/2021/06/md-sef.jpg">
                        </div>
                        <div>
                            <p class="message-content-p d-flex">
                                The Sindh Education Foundation with support of the Govt. of Sindh strongly aims to enact
                                and spread the quality education in all corners of the province with modern, latest and
                                scalable approach. The Foundation responsibly recognizes the challenge of the access of
                                the education in terms of catering the out of school children and ensuring the quality
                                of education in the existing publicly owned educational facilities.

                                In the recent Covid pandemic scenario, including all other sector, the education sector
                                is also impacted, yet, Foundation is determined to address the loss by imparting the
                                smart learning and teaching methods. In this current year, 2021, Foundation in pursuance
                                of its mission and the commitments of the honorable Chief Minister, Govt. of Sindh
                                selected around 1000 new sites for opening new schools to educate the approximately
                                250,000 out of school children. Besides, the regular FAS program, Foundation is trusted
                                by the Government of Sindh to functionalize the comprehensive English medium School
                                through its PPP modality to set a benchmark with a sustainable and scalable approach.

                                It is pertinent to mention that these interventions along with the education also boost
                                the economic activity in form of engaging entrepreneurs, hiring of teachers, other staff
                                and construction of schools will certainly generate an economic activity for the
                                locality with province wide impact.
                            </p>
                            <div class='last-content'>
                                <p>Mr. Abdul Kabir Kazi,
                                </p>
                                <p>Managing Director, Sindh Education Foundation, Govt. of Sindh
                                </p>
                            </div>
                        </div>
                    </div>
                </x-slot>
                <div class='content-row'>
                    <p>
                        <x-slot name="maincontent" class='content-slot'>
                            <div class="main-content-div">

                            </div>
                        </x-slot>
                    </p>
                </div>
                <!-- </div> -->
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