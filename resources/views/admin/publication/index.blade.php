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
                            <h4 class="mb-3">E-Publication</h4>
                        </div>
                        <div>
                            <a href="/publication-category" class="btn btn-primary add-list"><i
                                    class="ri-file-user-fill"></i>Add Category</a>
                            <a href="/publication/create" class="btn btn-primary add-list"><i
                                class="ri-file-user-fill"></i>Add Publication</a>
                        </div>
                    </div>
                </div>
                @include('includes.publication_datatable')


            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
