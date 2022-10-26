@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Functionalization Govt School Building" >
                    <x-slot name="banner">
                       
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div">
                            <p> 
                            The Government has also assigned the Foundation with functionalizing the dysfunctional government school buildings under the SEF’s PPP modality. Moreover, the Foundation will be functionalizing around 500 viable government schools’ buildings under the Foundation’s per child subsidy model in partnership with credible private partners by the start of Academic Year 2022-23. This effort will not just optimize the utilization of government’s resources but also bring down the out-of-school children in Sindh.
                            </p>
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="Programs">
                        <x-slot name="links">
                            <ul>
                                    <li>
                                        <a href="/alpt">AALPT</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/aasp">Adopt-a-School-Program (AASP)</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/fas">Foundation Assisted Schools(FAS)</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/functionalization-govt-school-building">Functionalization of Govt School Buildings</a>
                                        <div class="border_black"></div>
                                    </li>
                                    <li>
                                        <a href="/comprehensive-school">Comprehensive Schools</a>
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