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
                            <h4 class="mb-3"> Department Pages</h4>
                        </div>
                        <a href="/department-category" class="btn btn-primary add-list"><i
                                class="ri-file-user-fill"></i>Add Category</a>
                        <a href="/department/create" class="btn btn-primary add-list"><i
                                class="ri-file-user-fill"></i>Add Department Pages</a>
                    </div>
                </div>
                @include('includes.department_datatable')


            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
