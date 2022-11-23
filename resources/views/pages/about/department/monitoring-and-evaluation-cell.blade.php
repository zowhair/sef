@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav :category="" />
    <main>
        <div class="container">
            <div class="row">
            @foreach($data as $row)
                <x-main-center.main-center-left name="{{$row->page_title}}" >
                    <x-slot name="banner">
                        <img data-src="{{$row->bannar_img}}" class="lazyload"
                                 src="{{$row->bannar_img}}">
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3> {{$row->sub_title}}</h3>
                            <p> 
                            {{$row->decription}}
                            </p>
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
            @endforeach
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