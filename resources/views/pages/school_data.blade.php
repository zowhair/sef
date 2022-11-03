@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <div class="row mb-3 justify-content-center school">
                <div class="col-3 card school_card m-4  d-flex flex-row">
                    <div class="card-body ">
                        <h5 class="card-title">Schools</h5>
                        <h6>1234</h6>
                    </div>
                    <div class="p-4 card-icon">
                        <i class="fa fa-university" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-3 card school_card m-4  d-flex flex-row">
                    <div class="card-body">
                        <h5 class="card-title">Teacher</h5>
                        <h6>3452</h6>
                    </div>
                    <div class="p-4 card-icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-3 card school_card m-4  d-flex flex-row">
                    <div class="card-body">
                        <h5 class="card-title">Students</h5>
                        <h6>3452</h6>
                    </div>
                    <div class="p-4 card-icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <x-bottom-map />
            </div>
        </div>
        <!-- footer along with script tags -->
        @include('includes.footer')
    </main>
@stop