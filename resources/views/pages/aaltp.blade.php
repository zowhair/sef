@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center-left name="ALTP" >
                    <x-slot name="banner">
                        <h1>banner image</h1>
                    </x-slot>
                    <x-slot name="maincontent">
                        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis saepe illum dolore sint nemo incidunt doloremque delectus assumenda quaerat aliquid, voluptatem culpa magnam facere laudantium nihil voluptate repellat architecto minima?</p>
                    </x-slot>
                </x-main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center-right-top name="programs">
                        <x-slot name="links">
                            <ul>
                                @for($i=0;$i<4;$i++) 
                                    <li>
                                        <a href="#">Adopt-a-School-Program (AASP)</a>
                                        <div class="border_black"></div>
                                    </li>
                                @endfor
                            </ul>
                        </x-slot>
                    </x-main-center-right-top>
                    <x-main-center-right-bottom name="recent news">
                            <x-slot name="links1">
                                <ul>
                                    <p>
                                        @for($i=0;$i<2;$i++)
                                            <li>
                                                Planning and Organizing Events, Seminars, Workshops
                                            </li>
                                        @endfor
                                    </p>
                                </ul>
                            </x-slot>
                    </x-main-center-right-bottom>
                </div>
            </div>
        </div>
        <!-- footer along with script tags -->
        @include('includes.footer')
    </main>
@stop