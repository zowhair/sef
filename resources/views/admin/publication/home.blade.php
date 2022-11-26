@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row">
                <x-main-center.main-center-left name="Reseach Studies" >
                    <x-slot name="banner">
                    
                    </x-slot>
                    <x-slot name="maincontent">
                        <div  class="main-content-div publicaition-page">
                            <div class="row"> 
                                @foreach($data as $row)
                                    @if($row->image != null)
                                    <div class="col-3 col-md-3">
                                        <div>
                                            <a href="{{$row->file_url}}" class="text-decoration-none "  target="_blank"><img class="reserachImg" src="{{$row->image}}">
                                        </div>
                                        <div class="text-center mt-4">
                                            <h6>{{$row->title}}</h6></a>
                                            <p class="inner-content-text">{{$row->decription}} <br>{{$row->date}}</p>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-4 col-md-4 d-flex">
                                        <div class="newsletter-icon ">
                                            <i class="fa fa-newspaper" aria-hidden="true"></i>
                                        </div>
                                        <div>
                                            <a href="{{$row->file_url}}" class="text-decoration-none "  target="_blank">
                                            <h6>{{$row->title}}</h6></a>
                                            <p class="inner-content-text">{{$row->decription}}</p>
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                           
                        </div>
                       
                    </x-slot>
                </x-main-center.main-center-left>
                <div class="col-4 main-center-section-right">
                    <x-main-center.main-center-right-top name="E-Publication">
                        <x-slot name="links">
                            <ul>
                                @foreach($category as $row)
                                    <li>
                                        <a href="/publication/{{$row->id}}">{{$row->title}}</a>
                                        <div class="border_black"></div>
                                    </li>
                                @endforeach
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