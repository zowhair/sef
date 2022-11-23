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
                            <h4 class="mb-3">Scholarship</h4>
                        </div>
                        <a href="/scholarships/create" class="btn btn-primary add-list"><i
                                class="ri-file-user-fill"></i>Add Scholarship</a>
                    </div>
                </div>
                @include('admin.scholarship.datatables');


            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
