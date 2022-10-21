@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        
        <div class="container">
            <div class="row">
                <div class="col-8 main-center-section-left">
                    <div class="main-center-title">
                        <h4>Programs</h4>
                    </div>
                    <div class="widget-title"></div>
                    <div class="main-center-section">
                        <div class="video_img">
                            <img data-src="https://www.sef.org.pk/wp-content/uploads/2019/12/1-4.jpg" class="lazyload"
                                 src="https://www.sef.org.pk/wp-content/uploads/2019/12/1-4.jpg"
                                 style="width: 800px;height: 450px">
                        </div>
                        <div class="text-container">
                            <h3>INTRODUCTION</h3>
                            <p>
                                Adolescent and Adult Learning and Training Program (AALTP), for adolescents and adults who have missed an opportunity to avail education. The AALTP aims to provide accelerated formal primary education for vulnerable adolescents and basic functional literacy for adults together with a certified Skill Development / Vocational Training course for each learner for enabling them with varying opportunities of human capital development and socio economic growth. The component of education will financially be supported by SEF; whereas, training component would be funded through the Government of Sindh.
                            </p>
                        </div>
                    </div>
                </div>
            <x-main-center-section name="Mid Section" />
            </div>
        </div>
        
        <!-- footer along with script tags -->
        @include('includes.footer')
    </main>
@stop