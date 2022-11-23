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
                            <h4 class="mb-3">Scholarship Gallery</h4>
                        </div>
                        <a href="/galleries/create" class="btn btn-primary add-list"><i
                                class="ri-file-user-fill"></i>Add Image</a>
                    </div>
                </div>
                @include('admin.scholarship.gallary.datatables')


            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
