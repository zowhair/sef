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
                                src="https://www.sef.org.pk/wp-content/uploads/2021/06/cm-sindh.png">
                        </div>
                        <div>
                            <p class="message-content-p d-flex">
                                The Government of the Sindh firmly believes that quality education is the basic
                                right of
                                every citizen and is an essential component to meet the challenges of the
                                rapidly
                                changing scenario of the overall development around the globe.
                                The Government of Sindh is keenly concerned to widely address the issues of the
                                education sector by owning the slogan i.e. “Education for All”, aiming to meet
                                the
                                learning needs of all children, youth. The Government of Sindh in pursuance of
                                this
                                commitment enacted the “Sindh Right of Children to Free and Compulsory Education
                                Act,
                                2013” fulfilling its promise with the people of this province.
                                The Sindh Education Foundation, a major arm of the Government of Sindh for
                                Public
                                Private Partnerships in the education sector, is playing a vital role in
                                assuring
                                the
                                access to quality education throughout the province in a credible manner for
                                formal
                                and
                                non-formal education for children, youth and adults. The portfolio of the
                                Foundation
                                is
                                greatly expanding this year with almost a thousand new schools in targeted areas
                                all
                                across the province, especially the underserved communities, deep rural pockets
                                and
                                far-flung difficult to reach areas. Hopefully, these schools will be eventually
                                able
                                to
                                educate more than 250,000 children with focus to bring down the number of
                                out-of-school
                                children in Sindh which has been one of the biggest challenges faced by
                                Pakistan.
                            </p>
                        </div>
                    </div>
                    <div class='last-content'>
                        <p>Mr.Syed Murad Ali Shah,</p>
                        <p>Chief Minister, Sindh / Chairman, SEF Board of Governors</p>
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