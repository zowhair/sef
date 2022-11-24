@extends('admin.layouts.user')
@section('dashtitle')
@endsection
@section('contents')
    <div class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-3">Annual Report</h4>
                        </div>
                        <a href="/annual-report/create" class="btn btn-primary add-list"><i
                                class="ri-file-user-fill"></i>Add Annual Report</a>
                    </div>
                </div>
                @include('includes.annualReport_datatable')


            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
