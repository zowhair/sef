@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Alumni" >
                    <x-slot name="banner">
                           
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <h3> </h3>
                            <p> 
                            </p>
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="Programs">
                        <x-slot name="links">
                            <ul>
                                    <li>
                                        <a href="/scholarship">Introduction</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/partner-institution">Partner Institution</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/annoncements">Annoncements</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/alumni">Alumni</a>
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