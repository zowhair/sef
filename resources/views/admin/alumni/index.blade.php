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
                            <h4 class="mb-3">Alumni</h4>
                        </div>
                        <a href="/alumnis/create" class="btn btn-primary add-list"><i
                                class="ri-file-user-fill"></i>Add Alumni</a>
                    </div>
                </div>
{{--                @include('layout.tender-datatable')--}}
                @include('includes.alumni_datatables')


            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
