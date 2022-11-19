@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
<x-nav />
<main>
    <div class="container">
        <div class="row">
            <x-main-center.main-center-left name="MANAGEMENT TEAM HEAD OFFICE">
                <x-slot name="banner">

                </x-slot>
                <x-slot name="maincontent">
                </x-slot>
            </x-main-center.main-center-left>
        </div>
    </div>
    <div class="main-content-div">
                        <div class="box-content">
                            <div style="width: 18rem;">
                                <img src="https://www.sef.org.pk/wp-content/uploads/2021/06/md-sef-300x300.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title name">ABDUL KABIR KAZI</h5>
                                    <p class="card-text designation">Managing Director.</p>
                                    <p class="sub-title"></p>
                                </div>
                            </div>
                        </div>

                        <div class="box-content">
                            <div style="width: 18rem;">
                                <img src="https://www.sef.org.pk/wp-content/uploads/2022/03/DMD-1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title name">Naeem Anwar</h5>
                                    <p class="card-text designation">Deputy Managing Director.</p>
                                    <p class="sub-title">(Support Services)</p>

                                </div>
                            </div>
                        </div>


                        <div class="box-content">
                            <div style="width: 18rem;">
                                <img src="https://www.sef.org.pk/wp-content/uploads/2016/11/SADAF-ANEES-SHAIKH.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title name">SADAF ANEES SHAIKH</h5>
                                    <p class="card-text designation">Deputy Managing Director.</p>
                                    <p class="sub-title">(Operations)</p>
                                </div>
                            </div>
                        </div>

                        <div class="box-content">
                            <div style="width: 18rem;">
                                <img src="https://www.sef.org.pk/wp-content/uploads/2020/08/ABDUL-JABBAR-MARI.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title name">ABDUL JABBAR MARI</h5>
                                    <p class="card-text designation">Director.</p>
                                    <p class="sub-title">(Human Resources Department/Planning & Programs)</p>
                                </div>
                            </div>
                        </div>

                        <div class="box-content">
                            <div style="width: 18rem;">
                                <img src="https://www.sef.org.pk/wp-content/uploads/ManagementTeam/MsShahparaRizvi.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title name">SHAHPARA RIZVI</h5>
                                    <p class="card-text designation">Director.</p>
                                    <p class="sub-title">(General Administration & Coordination) </p>
                                </div>
                            </div>
                        </div>

                        <div class="box-content">
                            <div style="width: 18rem;">
                                <img src="https://www.sef.org.pk/wp-content/uploads/2021/08/dir-finance.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title name"> ALTAF AZAD ALI</h5>
                                    <p class="card-text designation">Director .</p>
                                    <p class="sub-title">(Finance Audit & Accounts Department)</p>
                                </div>
                            </div>
                        </div>

                    </div>
    <!-- footer along with script tags -->
    @include('includes.footer')
</main>
@stop