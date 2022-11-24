@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
<x-nav />
<main>
    <div class="container">
        <div class="row">
            <x-main-center.main-center-left name="MESSAGE OF PROVINCIAL MINISTER FOR EDUCATION AND LITERACY, GOS">
                <x-slot name="banner">
                    <div class='child-row d-flex'>
                        <div class="image-div2">
                            <img data-src="https://www.sef.org.pk/wp-content/uploads/2021/06/cm-sindh.png"
                                class="lazyloadImage"
                                src="https://www.sef.org.pk/wp-content/uploads/2018/08/sardar-shah.jpg">
                        </div>
                        <div>
                            <p class="message-content-p d-flex">
                                The Sindh Education Foundation is pivotal part of the Ministry of Education & Literacy,
                                Sindh. In the recent years, the Foundation exhibited a vivid progress in ensuring the
                                access of the quality education in the remote areas of the Sindh through the Foundations
                                Public-Private Partnership framework.

                                The PPP framework of the Foundation has successfully evolved in the educational canvas
                                of Sindh and has produced and nourished human resources in form of the students,
                                teachers, partners, communities and other stakeholders to raise the modern and
                                competitive process of instituting a progressive and dynamic education sector that
                                ultimately is attaining the objectives and the goals of the province in pursuance of the
                                commitments of the Govt. of Sindh under the 18th Amendment of the Constitution of
                                Pakistan that states that “The State shall provide free and compulsory education to all
                                children of the age of five to sixteen years in such manner as may be determined by the
                                law." as declared in the Article 25-A.
                            </p>
                            <div class='last-content'>
                                <p>Mr.Sayed Sardar Ali Shah,</p>
                                <p>Chief Minister, Sindh / Chairman, SEF Board of Governors</p>
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