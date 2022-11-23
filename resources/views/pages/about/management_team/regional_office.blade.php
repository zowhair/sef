@extends('layout.app')
@extends('layout.page-inner-section')
@section('content')
<x-nav />
<main>
    <div class="container">
        <div class="row">
            <x-main-center.main-center-left name="REGIONAL OFFICE">
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
                <img src="https://www.sef.org.pk/wp-content/uploads/2021/06/nawab-zafar.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title name">MR.NAWAB ZAFAR ALI</h5>
                    <p class="card-text designation">Regional Head.</p>
                    <p class="sub-title">(Hyderabad)</p>
                    <p class="sub-title"></p>
                </div>
            </div>
        </div>

        <div class="box-content">
            <div style="width: 18rem;">
                <img src="https://www.sef.org.pk//wp-content/uploads/2020/03/Mr.DilshadSukkur.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title name">MR. DILSHAD PIRZADA</h5>
                    <p class="card-text designation">Regional Head.</p>
                    <p class="sub-title">(Karachi)</p>

                </div>
            </div>
        </div>


        <div class="box-content">
            <div style="width: 18rem;">
                <img src="https://www.sef.org.pk/wp-content/uploads/2021/10/Feroz-Mansoor-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title name">MR. FEROZ MANSOOR</h5>
                    <p class="card-text designation">Regional Head.</p>
                    <p class="sub-title">(Mirpurkhas)</p>
                </div>
            </div>
        </div>

        <div class="box-content">
            <div style="width: 18rem;">
                <img src="https://www.sef.org.pk/wp-content/uploads/2021/06/imam-bux.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title name">MR.IMAM BUX</h5>
                    <p class="card-text designation">Regional Head.</p>
                    <p class="sub-title">(Shaheed Benazirabad)</p>
                </div>
            </div>
        </div>

        <div class="box-content">
            <div style="width: 18rem;">
                <img src="https://www.sef.org.pk/wp-content/uploads/ManagementTeam/no-profile-img.png.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title name">MR.MUSHTAQUE SOOMRO</h5>
                    <p class="card-text designation">Regional Head.</p>
                    <p class="sub-title">(Larkana & Sukkur) </p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer along with script tags -->
    @include('includes.footer')
</main>
@stop