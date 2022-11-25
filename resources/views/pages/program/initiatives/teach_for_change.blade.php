@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
<x-nav />
<main>
    <div class="container">
        <div class="row">
            <x-main-center.main-center-left name="TEACH FOR CHANGE">
                <x-slot name="banner">

                </x-slot>
                <x-slot name="maincontent">
                    <div class="main-content-div">
                        <h3></h3>
                        <p> “Teach for Change” is an innovative program of Sindh Education Foundation Govt. of Sindh
                            which was benchmarked on the Teach for Pakistan Program. The Program entails professional
                            engagement of fresh, qualified and motivated youth to bring about a change in the quality of
                            teaching-learning process in the schools through subject-specific teaching support in
                            Mathematics, Science & English as well as mentoring of teachers with an overarching
                            objective of school improvement.
                        </p>
                        <p>
                            Given its viability, the formation of
                            Public Private Partnerships is SEF’s
                            core mandate and has become an
                            instrumental concept and approach
                            throughout the organization’s programs.
                            This has helped in mobilizing technical,
                            financial and human resource services of
                            the private, public and community
                            sectors for revitalization and
                            enhancement of educational opportunities
                            for the marginalized segments of
                            society.
                        </p>
                        <p>

                            On the one hand the private sector is
                            effectively engaged in government school
                            reform, and on the other, a new
                            dimension in public-private partnership
                            for education has been pioneered where
                            public funds and expertise are channeled
                            towards strengthening the cost-effective
                            private schools sector. Moreover,
                            community mobilization and volunteerism
                            have facilitated the formation of
                            dynamic, inclusive, and participative
                            learning spaces.
                        </p>
                        <h3>Quality Assurance</h3>
                        <p>
                            The Sindh Education Foundation works towards quality assurance by improving and evolving
                            programs and associated processes to ensure continuous improvement of educational outcomes.
                            The programmatic portfolio operates in sync with a dynamic quality assurance framework that
                            seeks to facilitate the SEF ideals for smooth operation and enhancement of learning outcomes
                            for children across all the partner schools. The various programs and units work
                            collaboratively to achieve this goal.</p>
                        <p>
                            As a central support system, Program Support & Development provides intellectual, strategic,
                            technical and operational facilitation for systematic development of programs and personnel
                            at all organizational levels and for efficient implementation at the grassroots
                        </p>
                        <p>
                            Advocacy which involves promoting quality education initiatives is regularly undertaken
                            through the forum of seminars, workshops and policy dialogues organized at both the
                            provincial and local levels. A diverse range of publications and resources, both educational
                            and institutional, are also developed in-house to enrich the learning environment in
                            schools.
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